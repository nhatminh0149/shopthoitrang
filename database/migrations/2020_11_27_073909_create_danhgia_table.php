<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDanhgiaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('danhgia', function (Blueprint $table) {
            $table->increments('dg_id');
            $table->string('dg_noidung', 255);
            $table->datetime('dg_ngaydanhgia');
            $table->unsignedInteger('sp_id')->nullable();
            $table->unsignedInteger('kh_id')->nullable();
            $table->integer('dg_trangthai')->comment('0: Chưa xử lý, 1: Đã xử lý');
            $table->integer('dg_parent_comment')->nullable();

            $table->foreign('sp_id')->references('sp_id')->on('sanpham')->onDelete('SET NULL')->onUpdate('CASCADE');
            $table->foreign('kh_id')->references('kh_id')->on('khachhang')->onDelete('SET NULL')->onUpdate('CASCADE');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('danhgia');
    }
}
