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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Category name (Men, Tops, T-shirts, etc.)
            $table->string('slug')->unique()->nullable(); // For URLs
            $table->unsignedBigInteger('parent_id')->nullable(); // Self-reference
            $table->text('description')->nullable(); // Optional description
            $table->boolean('status')->default(true); // Active / Inactive
            $table->timestamps();

            // Foreign key self-reference
            $table->foreign('parent_id')->references('id')->on('categories')->onDelete('cascade');
            $table->index('parent_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
