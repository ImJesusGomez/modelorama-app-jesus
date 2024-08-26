<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    // protected $table = 'products'; // Asi se llegan a usar las tablas sin que se llamen igual
    protected $fillable = ['name', 'desc', 'product_number','branch', 'price']; 
    // $fillable - Todas las columnas que el declare podrán ser llenadas de forma masiva y desde un formulario
}
