<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory, HasUuids;
    protected $fillable =[
        'title',
        'caption',
        'category_id',
        'content',
        'image_path'
    ];

    public function category(): BelongsTo
    {
       return $this->belongsTo(Category::class);
    }

    public function comment(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

    //Para eliminar os dados em cascata tabela users e tabela comments
    public static function booted()
    {
        static::deleting(function (Article $article) {
            $article->comment()->delete();
        });
    }

}
