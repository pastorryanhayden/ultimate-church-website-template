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
        Schema::create('devotions', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('text');
            $table->string('video_url')->nullable();
            $table->string('audio_url')->nullable();
            $table->string('image_url')->nullable();
            $table->mediumText('body');
            $table->foreignId('leader_id')->constrained()->onDelete('cascade');
            $table->timestamps();
            $table->boolean('published')->default(false);
            $table->dateTime('published_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('devotions');
    }
};
