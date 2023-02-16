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
        Schema::create('product', function (Blueprint $table) {
            $table->id('product_id');
            $table->foreignId('categorie_id')->constrained('categorie');
            $table->string('nom');
            $table->decimal('prix');
            $table->integer('poids');
            $table->text('description');
            $table->text('detail');
            $table->text('lieu');
            $table->integer('distance');
            $table->float('lattitude');
            $table->float('longitude');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
