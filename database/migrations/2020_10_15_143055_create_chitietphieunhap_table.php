<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChitietphieunhapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chitietphieunhap', function (Blueprint $table) {
            $table->unsignedInteger('pnk_id');
            $table->unsignedInteger('sp_id');
            $table->unsignedInteger('m_id');
            $table->unsignedInteger('size_id');
            $table->unsignedInteger('ctpn_soluong');
            $table->unsignedInteger('ctpn_gianhap');

            $table->foreign('pnk_id')->references('pnk_id')->on('phieunhapkho')->onUpdate('CASCADE');
            $table->foreign('sp_id')->references('sp_id')->on('sanpham')->onUpdate('CASCADE');
            $table->foreign('m_id')->references('m_id')->on('mau')->onUpdate('CASCADE');
            $table->foreign('size_id')->references('size_id')->on('size')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chitietphieunhap');
    }
}
