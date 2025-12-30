<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Therapist extends Model
{
    public function up(): void
{
    Schema::create('therapists', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('role'); // Doctor, Assistant Manager, etc.
        $table->string('image')->nullable(); // profile picture
        $table->text('description')->nullable();
        $table->timestamps();
    });
}

}
