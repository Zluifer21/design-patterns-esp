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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('type_id')->constrained()->onDelete('cascade');
            $table->string('name');
            $table->text('description')->nullable();
            $table->decimal('price', 10, 2);
            $table->string('image')->nullable();

            $table->timestamps();
            // Fields for cars
            $table->string('brand')->nullable();
            $table->string('model')->nullable();
            $table->integer('year')->nullable();

            // Fields for apartments
            $table->string('location')->nullable();
            $table->integer('rooms')->nullable();
            $table->integer('bathrooms')->nullable();

            // Fields for yachts
            $table->string('type')->nullable();
            $table->integer('length')->nullable();
            $table->integer('capacity')->nullable();
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
