<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'id';

    protected $fillable = ['id', 'nom', 'prix', 'poids', 'description'];

    public function order()
    {
        return $this->belongsToMany(Order::class);
    }


    use HasFactory;
}
