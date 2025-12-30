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
       Schema::create('therapy_packages', function (Blueprint $table) {
    $table->id();

    $table->foreignId('therapy_category_id')
          ->constrained('therapy_categories')
          ->onDelete('cascade');

    $table->string('name');
    $table->text('description')->nullable();
    $table->string('duration');
    $table->decimal('price', 8, 2);
    $table->enum('mode', ['online', 'on-site']);
    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('therapy_packages');
    }
};
