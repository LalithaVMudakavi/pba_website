<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('listings', function (Blueprint $table) {

            $table->id();

            $table->string('title');

            $table->foreignId('category_id')
                  ->constrained()
                  ->cascadeOnDelete();

            $table->boolean('featured')->default(false);

            $table->string('location');

            $table->decimal('price',15,2);

            $table->decimal('cash_flow',15,2);

            $table->text('description');

            $table->timestamps();

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('listings');
    }
};