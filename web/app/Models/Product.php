<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';
    protected $primaryKey = 'product_id';
    

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
