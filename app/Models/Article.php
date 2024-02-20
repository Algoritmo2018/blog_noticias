<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
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

}
