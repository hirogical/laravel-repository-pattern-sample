<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'author_id',
        'publisher_id',
        'title',
        'date_of_publication',
        'isbn',
        'price',
        'pages',
        'language_code'
    ];

    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    public function publisher()
    {
        return $this->belongsTo(Publisher::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
