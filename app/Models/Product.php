<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Tambahkan baris ini untuk mengizinkan input data
    protected $fillable = [
        'name',        // Tipe Teks (VARCHAR)
        'price',       // Tipe Angka (INT)
        'description',  // Tipe Teks (TEXT)
        'category_id'
    ];

    public function category() { return $this->belongsTo(Category::class); }
}