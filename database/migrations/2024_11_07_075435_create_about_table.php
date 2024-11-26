<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutTable extends Migration
{
    public function up()
    {
        Schema::create('about', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->text('deskripsi');
            $table->date('tanggal_lahir');
            $table->string('alamat');
            $table->string('negara');
            $table->string('provinsi')->nullable();
            $table->string('kota')->nullable(); 
            $table->string('email')->unique();
            $table->string('no_telp');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('about');
    }
}
