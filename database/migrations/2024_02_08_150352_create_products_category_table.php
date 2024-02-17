<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products_category', function (Blueprint $table) {
            $table->string('category_id')->primary();
            $table->string('parent_id')->nullable();
            $table->string('title')->unique();
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->string('image')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products_category');
    }
};
