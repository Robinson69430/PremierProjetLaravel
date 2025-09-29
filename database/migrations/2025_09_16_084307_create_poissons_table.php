<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
            $table->string('description');


     */
    public function up(): void
    {
        Schema::create('poissons', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->float('prix');
            $table->string('type');
            $table->text('image');



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('poissons');
    }
};
