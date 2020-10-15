<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKhuyenmaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khuyenmai', function (Blueprint $table) {
            $table->increments('km_id');
            $table->string('km_ten', 255);
            $table->string('km_mota', 255)->nullable();
            $table->integer('km_giatriphantram');
            $table->date('km_ngaytao');
            $table->date('km_ngayapdung');
            $table->date('km_ngayketthuc');
            $table->integer('km_trangthai');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('khuyenmai');
    }
}
