<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePelanggaranDetailsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelanggaran_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_pelanggaran');
            $table->integer('no_induk');
            $table->integer('id_tindakan');
            $table->string('catatan');
            $table->integer('poin');
            $table->date('tgl_pelanggaran');
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
        Schema::drop('pelanggaran_details');
    }
}
