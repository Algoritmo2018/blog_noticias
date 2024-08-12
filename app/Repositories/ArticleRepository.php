<?php

namespace App\Repositories;

use Illuminate\Support\Facades\File;
use App\Models\Article;
use Illuminate\Pagination\LengthAwarePaginator;

class ArticleRepository
{
    public function __construct(protected Article $article)
    {
    }

    public function getPaginate(int $totalPerPage = 15, int $page = 1, string $filter = ''): LengthAwarePaginator
    {
        return $this->article->where(function ($query) use ($filter) {

            if ($filter !== '') {
                $query->where('title', 'LIKE', "%{$filter}%");
            }
        })

        ->with(['comment'])
        ->paginate($totalPerPage, ['*'], 'page', $page);
    }



    public function findById(string $id): ?Article
    {
        
        return $this->article
        ->with('comment') // Carrega os comentários relacionados ao artigo
        ->find($id);
    }



}
