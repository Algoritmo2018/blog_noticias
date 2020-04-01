<?php


namespace App\Http\Controllers\Home;

use App\Models\Article;
use App\Models\Slide;
use App\Models\Category;
use App\Models\Comment;
use Illuminate\Http\Request;

class HomeController
{



    public function index(Category $category, Slide $slide, Article $articles, Request $request)
    { // Para trazer todas as categorias
        $categories = $category->all();

        //Para trazer todos os slides
        $slides = $slide->all();

        //Para trazer os artigos correspondentes a pesquisa
        if (!empty($request->input('search'))) {

            $valor = $request->input('search');
            $articles = $articles->where('title', 'like', "%{$valor}%");
        }

        //Para trazer os artigos correspondentes a pesquisa por categoria
        if (!empty($request->input('scategory'))) {
            $valor = $request->input('scategory');
            $articles = $articles->where('category_id',$valor);
        }

        // Para trazer todos os artigos do banco de dados com as suas categorias
        $articles = $articles->with('category');
        //Para trabalhar a paginação
        $articles = $articles->simplepaginate(3);
        return view('index', compact('categories', 'slides', 'articles'));
    }

    public function artigo_completo(Category $category, string $id, Article $articles, Comment $comment)
    {


         // Para trazer todos os artigos do banco de dados com as suas categorias
         $articles = $articles->with('category');
         //Artigo por id
        $articles = $articles->where('id',$id)->first();

//Carrega todas as categorias
        $categories = $category->all();

        $comments =$comment->where('article_id', $id)->with('user')->simplepaginate(12);
        return view('artigo_completo', compact('categories', 'articles', 'comments'));
    }
}
