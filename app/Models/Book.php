<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Author;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'language',
        'publication_date',
        'author_id',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}
