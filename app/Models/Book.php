<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'publisherid', 'publication_year'];

    protected $with = ["publisher", "author"];

    public function author()
    {
        return $this->hasManyThrough(
            '\App\Models\Author',
            '\App\Models\BookAuthor',
            'book_id',
            'id',
            'id',
            'author_id'
        );
    }

    public function publisher()
    {
        return $this->hasOne(
            '\App\Models\Publisher',
            'id',
            'publisherid'
        );
    }
}
