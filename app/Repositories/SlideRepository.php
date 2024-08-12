<?php

namespace App\Repositories;

use Illuminate\Support\Facades\File;
use App\Models\Slide;
use Illuminate\Pagination\LengthAwarePaginator;

class SlideRepository
{
    public function __construct(protected Slide $slide)
    {
    }

    public function getPaginate(int $totalPerPage = 15, int $page = 1, string $filter = ''): LengthAwarePaginator
    {
        return $this->slide->where(function ($query) use ($filter) {

            if ($filter !== '') {
                $query->where('categoria', 'LIKE', "%{$filter}%");
            }
        })->paginate($totalPerPage, ['*'], 'page', $page);
    }



    public function findById(string $id): ?Slide
    {
        return $this->slide->find($id);
    }


     
}
