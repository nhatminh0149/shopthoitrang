<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChitietdonhangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chitietdonhang', function (Blueprint $table) {
            $table->unsignedInteger('ddh_id');
            $table->unsignedInteger('sp_id')->nullable();
            $table->unsignedInteger('size_id')->nullable();
            $table->unsignedInteger('m_id')->nullable();
            $table->unsignedInteger('ctdh_soluong');
            $table->unsignedInteger('ctdh_dongia');

            $table->foreign('ddh_id')->references('ddh_id')->on('dondathang')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('sp_id')->references('sp_id')->on('sanpham')->onDelete('SET NULL')->onUpdate('CASCADE');
            $table->foreign('size_id')->references('size_id')->on('size')->onDelete('SET NULL')->onUpdate('CASCADE');
            $table->foreign('m_id')->references('m_id')->on('mau')->onDelete('SET NULL')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chitietdonhang');
    }
}
