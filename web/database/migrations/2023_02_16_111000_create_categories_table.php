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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
        });

        DB::table('categories')->insert(array(
                ['nom'=>'Epicerie'],
                ['nom'=>'Boissons'],
                ['nom'=>'Droguerie'],
                ['nom'=>'Cosmétique'],
                ['nom'=>'Produits frais']
            )
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
