<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengirimanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengiriman', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_pengirim', 50);
            $table->string('nohp_pengirim', 20);
            $table->text('alamat_pengirim');
            $table->string('nama_penerima', 50);
            $table->string('nohp_penerima', 20);
            $table->text('alamat_penerima');
            $table->string('no_resi');
            $table->string('jenis_barang', 10); //paket dan dokumen
            $table->integer('berat');
            $table->string('layanan', 10); //reguler dan sameday
            $table->unsignedBigInteger('jarak_id');
            $table->unsignedBigInteger('kantorcabang_id');
            $table->integer('biaya');
            $table->string('status', 10); //input, keluar, diterima, dibawa
            $table->timestamps();

            $table->foreign('jarak_id')->references('id')->on('jarak');
            $table->foreign('kantorcabang_id')->references('id')->on('kantorcabang');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengiriman');
    }
}
