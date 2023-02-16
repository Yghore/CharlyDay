<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{



    protected $table = 'categorie';
    protected $primaryKey = 'categorie_id';

    /**
     * The model's default values for attributes.
     *
     * @var array
     */
    protected $attributes = [
        'nom' => ""
    ];


    use HasFactory;
}
