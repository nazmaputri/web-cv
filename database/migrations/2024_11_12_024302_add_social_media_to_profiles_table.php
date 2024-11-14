<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('profiles', function (Blueprint $table) {
            $table->string('whatsapp')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('instagram')->nullable();
            $table->string('youtube')->nullable();
            $table->string('linkedin')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('profiles', function (Blueprint $table) {
            $table->dropColumn(['whatsapp', 'facebook', 'twitter', 'instagram', 'youtube', 'linkedin']);
        });
    }
    
};
