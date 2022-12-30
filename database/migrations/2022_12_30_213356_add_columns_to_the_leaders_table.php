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
        Schema::table('leaders', function (Blueprint $table) {
            $table->boolean('pastor')->default(0);
            $table->boolean('lead_pastor')->default(0);
            $table->boolean('deacon')->default(0);
        });
    }

    
};
