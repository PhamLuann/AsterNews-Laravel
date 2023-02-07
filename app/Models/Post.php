<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravelista\Comments\Commentable;
use Orchid\Attachment\Attachable;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class Post extends Model
{
    use HasFactory, AsSource, Attachable, Filterable, Commentable;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'body',
        'author',
        'hero',
        'category_id',
    ];

    public function author(){
        return $this->hasOne(User::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
