<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('testomonials', function (Blueprint $table) {
            $table->id();
            $table->integer('client_priority');
            $table->string('client_image');
            $table->string('client_name');
            $table->string('client_company');
            $table->text('client_word');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testomonials');
    }
};
