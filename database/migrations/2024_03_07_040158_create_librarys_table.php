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
        Schema::create('perpustakaan', function (Blueprint $table) {
            $table->id();
            $table->string("isbn",25)->unique();
            // $table->string('picture',255)->nullable();
            $table->string("title",255);
            $table->string("writer",255);
            $table->string("publisher",255);
            $table->date("date_issue");
            $table->longText("description");
            $table->string("language",2);
            $table->longText("number_page");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perpustakaan');
    }
};
