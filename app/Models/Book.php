<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'book';

    protected $fillable = [
        'title',
        'author',
        'isbn',
        'cover',
        'category_id',
        'stock',
        'description',
        'status'
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }
}