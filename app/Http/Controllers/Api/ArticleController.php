<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Http\Resources\ArticleResource;
use App\Repositories\ArticleRepository;

class ArticleController extends Controller
{

    public function __construct(private ArticleRepository $articleRepository)
    {}

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $articles = $this->articleRepository->getPaginate(
            totalPerPage: $request->total_per_page ?? 15,
            page: $request->page ?? 1,
            filter: $request->get('filter', ''),
        );
        return ArticleResource::collection($articles);
    }



    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        if(!$article = $this->articleRepository->findById($id)){
            return response()->json(['message' => 'article not found'], Response::HTTP_NOT_FOUND);
        }
        return new ArticleResource($article);
    }



}
