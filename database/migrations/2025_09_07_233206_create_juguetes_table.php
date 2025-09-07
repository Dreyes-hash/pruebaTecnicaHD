<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('juguetes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 100);
            $table->enum('genero', ['niño','niña','unisex']);
            $table->decimal('precio', 10, 2);
            $table->string('imagen', 255)->nullable();
            $table->timestamps();

        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('juguetes');
    }
};
