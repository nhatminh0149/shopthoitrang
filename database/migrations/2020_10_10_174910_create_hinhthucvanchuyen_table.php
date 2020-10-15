<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHinhthucvanchuyenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hinhthucvanchuyen', function (Blueprint $table) {
            $table->increments('htvc_id');
            $table->string('htvc_ten', 255);
            $table->integer('htvc_chiphi');
            $table->string('htvc_diengiai', 255)->nullable();
            $table->integer('htvc_trangthai')->comment('0: Vô hiệu hóa, 1: Kích hoạt');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hinhthucvanchuyen');
    }
}
