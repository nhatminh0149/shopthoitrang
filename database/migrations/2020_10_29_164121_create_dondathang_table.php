<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDondathangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dondathang', function (Blueprint $table) {
            $table->increments('ddh_id');
            $table->datetime('ddh_ngaylap');
            $table->string('ddh_diachigiaohang', 255);
            $table->integer('ddh_trangthai')->comment('0: Chưa xử lý, 1: Đã xử lý');
            $table->unsignedInteger('id')->nullable();
            $table->unsignedInteger('kh_id')->nullable();
            $table->unsignedInteger('htvc_id')->nullable();
            $table->unsignedInteger('httt_id')->nullable();
            $table->unsignedInteger('px_id')->nullable();

            $table->foreign('id')->references('id')->on('admins')->onDelete('SET NULL')->onUpdate('CASCADE');
            $table->foreign('kh_id')->references('kh_id')->on('khachhang')->onDelete('SET NULL')->onUpdate('CASCADE');
            $table->foreign('htvc_id')->references('htvc_id')->on('hinhthucvanchuyen')->onDelete('SET NULL')->onUpdate('CASCADE');
            $table->foreign('httt_id')->references('httt_id')->on('hinhthucthanhtoan')->onDelete('SET NULL')->onUpdate('CASCADE');
            $table->foreign('px_id')->references('px_id')->on('phuongxa')->onDelete('SET NULL')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dondathang');
    }
}
