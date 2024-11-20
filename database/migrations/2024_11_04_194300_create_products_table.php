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
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // ID продукта
            $table->string('name'); // Название продукта
            $table->text('description')->nullable(); // Полное описание
            $table->text('short_description')->nullable(); // Краткое описание
            $table->unsignedBigInteger('price'); // Цена в целых числах
            $table->binary('img')->nullable(); // Изображение в формате BLOB
            $table->foreignId('category_id')->constrained(); // Внешний ключ для категории
            $table->foreignId('brand_id')->constrained(); // Внешний ключ для бренда
            $table->timestamps(); // Поля created_at и updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
