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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('title');
            $table->text('description');
            $table->string(column: 'slug')->unique();
            $table->foreignId(column: 'user_id')->constrained(
                table: 'users',
                indexName: 'books_users_id',
            );
            $table->foreignId(column: 'category_id')->constrained(
                table: 'categories',
                indexName: 'books_category_id',
            );
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
