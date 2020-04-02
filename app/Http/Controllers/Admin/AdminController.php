<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Support\Facades\File;
use App\Http\Controllers\Home\HomeController;
use App\Models\Slide;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ArmazenarUpdateCategoria;

class AdminController
{





    public function HomeAdm(Category $category, Article $articles, Slide $slide, Request $request)
    {

        //Veirifica si o usuario logado é admnistrador
        if (!(Auth::check() && Auth::user()->is_admin)) {
            return redirect()->route('home');
        }

        // Para trazer todas as categorias
        $slides = $slide->all();

        // Para trazer todas as categorias
        $categories = $category->orderBy('categoria', 'asc')->get();


        //Para trazer os artigos correspondentes a pesquisa
        if (!empty($request->input('search'))) {

            $valor = $request->input('search');
            $articles = $articles->where('title', 'like', "%{$valor}%");
        }
        // Para trazer todos os artigos do banco de dados com as suas categorias
        $articles = $articles->with('category');
        //Para trabalhar a paginação
        $articles = $articles->simplepaginate(15);


        return view('admin/homeadm', compact('categories', 'articles', 'slides'));
    }


    public function CadastrarArtigo(Category $category)
    {

        //Veirifica si o usuario logado é admnistrador
        if (!(Auth::check() && Auth::user()->is_admin)) {
            return redirect()->route('home');
        }

        $categories = $category->orderBy('categoria', 'asc')->get();
        return view('admin/cadastrar_artigo', compact('categories'));
    }

    public function EditarArtigo(Category $category)
    {

        //Veirifica si o usuario logado é admnistrador
        if (!(Auth::check() && Auth::user()->is_admin)) {
            return redirect()->route('home');
        }
        $categories = $category->orderBy('categoria', 'asc')->get();
        return view('admin/editar_artigo', compact('categories'));
    }

    public function CadastrarCategoria(Category $category)
    {


        //Veirifica si o usuario logado é admnistrador
        if (!(Auth::check() && Auth::user()->is_admin)) {
            return redirect()->route('home');
        }

        $categories = $category->orderBy('categoria', 'asc')->get();
        return view('admin/cadastrar_categoria', compact('categories'));
    }

    public function ArmazenarCategoria(ArmazenarUpdateCategoria $request, Category $category)
    {

        //Veirifica si o usuario logado é admnistrador
        if (!(Auth::check() && Auth::user()->is_admin)) {
            return redirect()->route('home');
        }

        $data = $request->all();

        $category = $category->create($data);

        session()->flash('sucess', 'Categoria cadastrada com sucesso');
        return redirect()->route('cadastrar_categoria');
    }

    public function EditarCategoria(Category $category, string|int $id)
    {

        //Veirifica si o usuario logado é admnistrador
        if (!(Auth::check() && Auth::user()->is_admin)) {
            return redirect()->route('home');
        }

        if (!$category = $category->where('id', $id)->first()) {
            return back();
        }
        $categories = $category->orderBy('categoria', 'asc')->get();
        return view('admin/editar_categoria', compact('category', 'categories'));
    }
    public function UpdateCategoria(ArmazenarUpdateCategoria $request, Category $category, string $id)
    {

        //Veirifica si o usuario logado é admnistrador
        if (!(Auth::check() && Auth::user()->is_admin)) {
            return redirect()->route('home');
        }


        if (!$category = $category->find($id)) {
            return back();
        }

        $category = $category->update($request->only([
            'categoria'
        ]));

        session()->flash('sucess', 'Categoria editada com sucesso');
        return redirect()->route('homeadm');
    }

    public function DestroyCategoria(Category $category, string|int $id)
    {

        //Veirifica si o usuario logado é admnistrador
        if (!(Auth::check() && Auth::user()->is_admin)) {
            return redirect()->route('home');
        }

        if (!$category = $category->find($id)) {
            return back();
        }
     //Elimina um autor todos os livros que estão associados a esse autor e elimina todos os emprestimos referenciados a este livro
     $articles = $category->article;

    foreach ($articles as $article) {
        $article->comment()->delete();
     
           // Delecta a imagem x que esta na pasta storage/app/public/img/slides/
           File::delete('storage/img/article/'.$article->image_path);
        $article->delete();
    }
        $category->delete();


        session()->flash('sucess', 'Categoria deletada com sucesso');
        return redirect()->route('homeadm');
    }

    public function CadastrarSlide(Category $category)
    {

        //Veirifica si o usuario logado é admnistrador
        if (!(Auth::check() && Auth::user()->is_admin)) {
            return redirect()->route('home');
        }

        $categories = $category->orderBy('categoria', 'asc')->get();
        return view('admin/cadastrar_slide', compact('categories'));
    }
    public function EditarSlide(Category $category)
    {
        $categories = $category->orderBy('categoria', 'asc')->get();
        return view('admin/editar_slide', compact('categories'));
    }
}
