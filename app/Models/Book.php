<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
