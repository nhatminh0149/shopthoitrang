<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHinhanhXoayTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hinhanh_xoay', function (Blueprint $table) {
            $table->increments('haxoay_id');
            $table->string('haxoay_ten', 255);
            $table->string('haxoay_hinh', 255);
            $table->unsignedInteger('sp_id');

            $table->foreign('sp_id')->references('sp_id')->on('sanpham')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hinhanh_xoay');
    }
}
