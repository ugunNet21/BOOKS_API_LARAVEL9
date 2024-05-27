<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('footers', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('country');
            $table->string('address');
            $table->string('facebook', 255)->nullable();
            $table->string('instagram', 255)->nullable();
            $table->string('twitter', 255)->nullable();
            $table->string('youtube', 255)->nullable();
            $table->string('github', 255)->nullable();
            $table->string('logo', 255);
            $table->string('telp', 20)->nullable();
            $table->string('whatsapp', 20)->nullable();
            $table->string('email', 255)->nullable();
            $table->time('open_hours_start')->nullable();
            $table->time('open_hours_end')->nullable();
            $table->string('open_days', 50)->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('footers');
    }
};
