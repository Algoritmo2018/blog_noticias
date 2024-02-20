<?php

namespace App\Http\Controllers\Admin;

use App\Models\Slide;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\ArmazenarUpdateCategoria;
use App\Models\Article;

class AdminController
{




    public function HomeAdm(Category $category, Article $articles)
    {


        // Para trazer todas as categorias
        $categories = $category->all();

// Para trazer todos os artigos do banco de dados com as suas categorias
$articles = $articles->with('category')->get();
// $articles = Article::paginate();

        return view('admin/homeadm', compact('categories', 'articles'));
    }


    public function CadastrarArtigo(Category $category)
    {

        $categories = $category->all();
        return view('admin/cadastrar_artigo', compact('categories'));
    }

    public function EditarArtigo(Category $category)
    {

        $categories = $category->all();
        return view('admin/editar_artigo', compact('categories'));
    }

    public function CadastrarCategoria(Category $category)
    {

        $categories = $category->all();
        return view('admin/cadastrar_categoria', compact('categories'));
    }

    public function ArmazenarCategoria(ArmazenarUpdateCategoria $request, Category $category)
    {

        $data = $request->all();

        $category = $category->create($data);

        return redirect()->route('cadastrar_categoria');
    }

    public function EditarCategoria(Category $category, string|int $id)
    {

        if (!$category = $category->where('id', $id)->first()) {
            return back();
        }
        $categories = $category->all();
        return view('admin/editar_categoria', compact('category', 'categories'));
    }
    public function UpdateCategoria(ArmazenarUpdateCategoria $request, Category $category, string $id)
    {
        if (!$category = $category->find($id)) {
            return back();
        }

        $category = $category->update($request->only([
            'categoria'
        ]));

        return redirect()->route('homeadm');
    }

    public function DestroyCategoria(Category $category ,string|int $id){

        if (!$category = $category->find($id)) {
            return back();
        }

        $category->delete();
        return redirect()->route('homeadm');
    }

    public function CadastrarSlide(Category $category)
    {
        $categories = $category->all();
        return view('admin/cadastrar_slide', compact('categories'));
    }
    public function EditarSlide(Category $category)
    {
        $categories = $category->all();
        return view('admin/editar_slide', compact('categories'));
    }

}
