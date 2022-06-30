<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLayananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('layanan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('nomor_kartu_keluarga');
            $table->string('kategori');
            $table->string('subKategori');
            $table->string('keluhan');
            $table->string('file_pdf');
            $table->string('kode_tiket')->unique();
            $table->string('status')->default('Draft');
            $table->string('email');
            $table->string('no_hp');
            $table->date('deadline')->format('d-m-Y')->nullable();
            $table->bigInteger('users_id')->unsigned()->index()->nullable();
            $table->foreign('users_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('layanan');
    }
}
