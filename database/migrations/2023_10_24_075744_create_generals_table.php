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
        Schema::create('generals', function (Blueprint $table) {
            $table->id();
            $table->string('generalType')->nullable();
            $table->string('title')->nullable();
            $table->text('text')->nullable();
            $table->string('media1')->nullable();
            $table->string('mediaType1')->nullable();
            $table->string('media2')->nullable();
            $table->string('mediaType2')->nullable();
            $table->string('media3')->nullable();
            $table->string('mediaType3')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('generals');
    }
};
