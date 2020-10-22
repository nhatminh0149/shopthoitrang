<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChitietsanphamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chitietsanpham', function (Blueprint $table) {
            $table->unsignedInteger('sp_id');
            $table->unsignedInteger('ha_id');
            $table->unsignedInteger('m_id');
            $table->unsignedInteger('size_id');
            $table->unsignedInteger('ctsp_soluong');

            $table->foreign('sp_id')->references('sp_id')->on('sanpham')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('ha_id')->references('ha_id')->on('hinhanh')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('m_id')->references('m_id')->on('mau')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('size_id')->references('size_id')->on('size')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chitietsanpham');
    }
}
