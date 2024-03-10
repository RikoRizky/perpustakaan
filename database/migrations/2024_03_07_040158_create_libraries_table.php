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
        Schema::create('libraries', function (Blueprint $table) {
            $table->id();
            $table->string("isbn",25)->unique();
            $table->string('picture',255)->nullable();
            $table->string("title",255);
            $table->string("name",255);
            $table->string("publisher",255);
            $table->string("date",255);
            $table->string("shelf_number", 10);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('libraries');
    }
};
