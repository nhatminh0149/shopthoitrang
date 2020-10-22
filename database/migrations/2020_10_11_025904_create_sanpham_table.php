<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSanphamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sanpham', function (Blueprint $table) {
            $table->increments('sp_id');
            $table->string('sp_ten', 255);
            //$table->string('sp_hinh', 255)->nullable();
            //$table->integer('sp_soluong');
            $table->string('sp_mota', 255);
            // $table->date('sp_ngaytaomoi');
            // $table->date('sp_ngaycapnhat');
            $table->integer('sp_trangthai')->comment('0: Vô hiệu hóa, 1: Kích hoạt');
            $table->unsignedInteger('lsp_id')->nullable();
            $table->unsignedInteger('km_id')->nullable();
            $table->unsignedInteger('kho_id')->nullable();

            $table->foreign('lsp_id')->references('lsp_id')->on('loaisanpham')->onDelete('SET NULL')->onUpdate('CASCADE');
            $table->foreign('km_id')->references('km_id')->on('khuyenmai')->onDelete('SET NULL')->onUpdate('CASCADE');
            $table->foreign('kho_id')->references('kho_id')->on('kho')->onDelete('SET NULL')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sanpham');
    }
}
