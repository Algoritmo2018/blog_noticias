<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory, HasUuids;

    protected $fillable =[
        'categoria'
    ];


    public function article(): HasMany{
        return $this->hasMany(Article::class);
     }
      //Para eliminar os dados em cascata tabela categoria e todos os artigos relacionados a está categoria
  public static function booted()
  {
      static::deleting(function (Category $category) {
          $category->article()->delete();
      });
  }
}
