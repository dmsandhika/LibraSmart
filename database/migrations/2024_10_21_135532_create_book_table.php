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
        Schema::create('book', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('author');
            $table->string('isbn')->unique();
            $table->string('cover');
            $table->unsignedBigInteger('category_id');
            $table->string('description')->nullable();
            $table->integer('stock')->default(0);
            $table->enum('status', ['Tersedia', 'Tidak Tersedia'])->default('active');
            $table->timestamps();
            
            $table->foreign('category_id')->references('id')->on('category');
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book');
    }
};