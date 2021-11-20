<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKantorCabangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kantorcabang', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('province_id', 2);
            $table->char('city_id', 4);
            $table->string('nama_kantor', 50);
            $table->text('alamat');
            $table->string('no_telp', 20);
            $table->string('jam_operasional');
            $table->timestamps();

            $table->foreign('province_id')
                ->references('id')
                ->on(config('laravolt.indonesia.table_prefix').'provinces')
                ->onUpdate('cascade')->onDelete('restrict');

            $table->foreign('city_id')
                ->references('id')
                ->on(config('laravolt.indonesia.table_prefix').'cities')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kantorcabang');
    }
}
