<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'excerpt',
        'isbn',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'books_users', 'book_id', 'user_id')->withTimestamps();
    }
}
