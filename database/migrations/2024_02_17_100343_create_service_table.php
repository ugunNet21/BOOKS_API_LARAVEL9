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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->enum('user', ['client', 'new client', 'member', 'new members', 'partners'])->default('client');
            $table->text('name')->nullable();
            $table->integer('contact')->nullable();
            $table->text('address')->nullable();
            $table->string('serial_number')->nullable();
            $table->text('description')->nullable();
            $table->text('case')->nullable();
            $table->foreignId('service_category_id')->constrained('service_categories')->onDelete('cascade');
            $table->enum('status', ['active', 'inactive', 'process', 'pending', 'failed', 'returned', 'accepted', 'completed', 'paid'])->default('active');
            $table->string('picture')->nullable();
            $table->decimal('down_payment', 10, 2)->nullable();
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
