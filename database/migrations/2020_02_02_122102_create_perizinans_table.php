<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePerizinansTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perizinans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('no_induk');
            $table->date('tgl_izin');
            $table->date('tgl_kembali');
            $table->string('penjemput');
            $table->string('catatan');
            $table->integer('status_izin');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('perizinans');
    }
}
