<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKhachhangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khachhang', function (Blueprint $table) {
            $table->increments('kh_id');
            $table->string('kh_taikhoan', 255);
            $table->string('kh_matkhau', 255);
            $table->string('kh_hoten', 255);
            $table->string('kh_email', 255);
            $table->string('kh_sdt', 10);
            $table->integer('kh_trangthai')->comment('0: Vô hiệu hóa, 1: Kích hoạt');

            $table->unique(['kh_email']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('khachhang');
    }
}
