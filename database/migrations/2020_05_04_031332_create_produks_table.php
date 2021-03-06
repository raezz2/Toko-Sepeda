<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produks', function (Blueprint $table) {
            $table->id();
            $table->String('nama');
            $table->String('slug');
            $table->unsignedBigInteger('merk_id');
            $table->unsignedBigInteger('kategori_id');
            $table->String('ukuran');
            $table->unsignedBigInteger('warna_id');
            $table->integer('stok');
            $table->text('desc')->nullable();
            $table->integer('harga');
            $table->integer('berat');
            $table->boolean('status')->default(true);
            $table->String('foto');
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
        Schema::dropIfExists('produks');
    }
}
