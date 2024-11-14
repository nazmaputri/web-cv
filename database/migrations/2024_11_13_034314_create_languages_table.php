<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Menjalankan migration.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('languages', function (Blueprint $table) {
            $table->id();
            $table->string('bahasa');
            $table->unsignedTinyInteger('persentase_bar')->nullable(); 
            $table->timestamps(); 
        });
    }

    /**
     * Mengembalikan migration.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('languages');
    }
};
