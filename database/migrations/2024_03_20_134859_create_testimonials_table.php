<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('testimonials', function (Blueprint $table) {
            $table->id();
            $table->text('content');
            $table->unsignedTinyInteger('rating')->default(0);
            $table->string('author_name');
            $table->string('picture');
            $table->string('author_position');
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('testimonials');
    }
};
