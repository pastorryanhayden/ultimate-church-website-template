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
        Schema::create('about_pages', function (Blueprint $table) {
            $table->id();
            $table->mediumText('what_services_like')->nullable();
            $table->string('what_services_like_title')->nullable();
            $table->mediumText('what_church_like')->nullable();
            $table->string('what_church_like_title')->nullable();
            $table->string('who_pastors_title')->nullable();
            $table->boolean('show_pastors')->default(false);
            $table->mediumText('other_info')->nullable();
            $table->string('other_info_title')->nullable();
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
        Schema::dropIfExists('about_pages');
    }
};
