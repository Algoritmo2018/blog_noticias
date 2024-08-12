<?php

namespace App\Repositories;

use Illuminate\Support\Facades\File;
use App\Models\Category;
use App\DTO\Categories\CreateCategoryDTO;
use App\DTO\Categories\EditCategoryDTO;
use Illuminate\Pagination\LengthAwarePaginator;

class CategoryRepository
{
    public function __construct(protected Category $category)
    {
    }

    public function getPaginate(int $totalPerPage = 15, int $page = 1, string $filter = ''): LengthAwarePaginator
    {
        return $this->category->where(function ($query) use ($filter) {

            if ($filter !== '') {
                $query->where('categoria', 'LIKE', "%{$filter}%");
            }
        })->paginate($totalPerPage, ['*'], 'page', $page);
    }

    public function createNew(CreateCategoryDTO $dto): Category
    {
        $data = (array) $dto;
        return $this->category->create($data);
    }

    public function findById(string $id): ?Category
    {
        return $this->category->find($id);
    }

    public function update(EditCategoryDTO $dto): bool
    {
        if (!$category = $this->findById($dto->id)) {
            return false;
        }
        $data = (array) $dto;
        return $category->update($data);
    }
    public function delete(string $id){

        if (!$category = $this->findById($id)) {
            return false;
        }
            //Elimina um autor todos os livros que estão associados a esse autor e elimina todos os emprestimos referenciados a este livro
     $articles = $category->article;

     foreach ($articles as $article) {
         $article->comment()->delete();

            // Delecta a imagem x que esta na pasta storage/app/public/img/slides/
            File::delete('storage/img/article/'.$article->image_path);
         $article->delete();
     }
        return $category->delete();
    }
}
