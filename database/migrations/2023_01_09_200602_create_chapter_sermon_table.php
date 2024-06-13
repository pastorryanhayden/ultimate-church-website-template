<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chapter_sermon', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('chapter_id');
            $table->unsignedBigInteger('sermon_id');
            $table->unsignedBigInteger('book_id');
            $table->string('verse')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chapter_sermon');
    }
};
