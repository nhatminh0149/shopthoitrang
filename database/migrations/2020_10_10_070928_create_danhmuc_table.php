<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDanhmucTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('danhmuc', function (Blueprint $table) {
            $table->increments('dm_id');
            $table->string('dm_ten', 255);
            $table->integer('dm_trangthai')->comment('0: Vô hiệu hóa, 1: Kích hoạt');
            $table->unsignedInteger('ncc_id')->nullable();

            $table->unique(['dm_ten']);

            $table->foreign('ncc_id')->references('ncc_id')->on('nhacungcap')->onDelete('SET NULL')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('danhmuc');
    }
}
