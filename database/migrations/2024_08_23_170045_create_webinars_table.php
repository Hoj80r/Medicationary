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
        Schema::create('webinars', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\User::class)->constrained()->restrictOnDelete();
            $table->char('title',255);
            $table->char('category');
            $table->char('instructor');
            $table->char('instructor_thumbnail_url')->nullable();
            $table->enum('webinar_status', ['terminated', 'alive']);
            $table->char('description');
            $table->char('webinar_url')->nullable();
            $table->char('thumbnail_url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('webinars');
    }
};
