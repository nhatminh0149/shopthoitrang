<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhieunhapkhoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phieunhapkho', function (Blueprint $table) {
            $table->increments('pnk_id');
            $table->date('pnk_ngaynhapkho');
            $table->unsignedInteger('id');
            $table->unsignedInteger('ncc_id');
            $table->unsignedInteger('kho_id');

            $table->foreign('id')->references('id')->on('admins')->onUpdate('CASCADE');
            $table->foreign('ncc_id')->references('ncc_id')->on('nhacungcap')->onUpdate('CASCADE');
            $table->foreign('kho_id')->references('kho_id')->on('kho')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('phieunhapkho');
    }
}
