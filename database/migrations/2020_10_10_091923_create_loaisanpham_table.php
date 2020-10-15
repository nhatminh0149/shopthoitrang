<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoaisanphamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loaisanpham', function (Blueprint $table) {
            $table->increments('lsp_id');
            $table->string('lsp_ten', 255);
            $table->integer('lsp_trangthai')->comment('0: Vô hiệu hóa, 1: Kích hoạt');
            $table->unsignedInteger('dm_id')->nullable();

            $table->unique(['lsp_ten']);

            $table->foreign('dm_id')->references('dm_id')->on('danhmuc')->onDelete('SET NULL')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('loaisanpham');
    }
}
