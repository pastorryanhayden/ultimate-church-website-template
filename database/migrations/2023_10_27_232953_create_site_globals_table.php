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
        Schema::create('site_globals', function (Blueprint $table) {
            $table->id();
            $table->string('heading');
            $table->json('action_links')->nullable();
            $table->string('header_image')->nullable();
            $table->string('header_video')->nullable();
            $table->string('map_address')->nullable();
            $table->mediumText('footer_about')->nullable();
            $table->mediumText('footer_schedule')->nullable();
            $table->string('church_phone')->nullable();
            $table->string('church_address')->nullable();
            $table->string('church_email')->nullable();
            $table->string('church_url')->nullable();
            $table->json('useful_links')->nullable();
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
        Schema::dropIfExists('site_globals');
    }
};
