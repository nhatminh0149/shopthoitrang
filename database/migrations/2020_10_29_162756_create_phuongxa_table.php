<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhuongxaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phuongxa', function (Blueprint $table) {
            $table->increments('px_id');
            $table->string('px_ten', 255);
            $table->string('px_loai', 255);
            $table->unsignedInteger('qh_id');

            $table->foreign('qh_id')->references('qh_id')->on('quanhuyen')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('phuongxa');
    }
}
