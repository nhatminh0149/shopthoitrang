<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNhacungcapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhacungcap', function (Blueprint $table) {
            $table->increments('ncc_id');
            $table->string('ncc_ten', 255);
            $table->string('ncc_diachi', 255);
            $table->string('ncc_sdt', 10);
            $table->integer('ncc_trangthai')->comment('0: Vô hiệu hóa, 1: Kích hoạt');

            $table->unique(['ncc_ten', 'ncc_sdt']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nhacungcap');
    }
}
