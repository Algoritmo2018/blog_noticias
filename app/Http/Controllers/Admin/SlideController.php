<?php

namespace App\Http\Controllers\Admin;

use App\Models\Slide;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class SlideController extends Controller
{



    public function SlidesCadastrados(Category $category)
    {


        //Veirifica si o usuario logado é admnistrador
        if (!(Auth::check() && Auth::user()->is_admin)) {
            return redirect()->route('home');
        }

        $categories = $category->orderBy('categoria', 'asc')->get();
        $slides = Slide::all();

        return view('admin/slides', compact('categories', 'slides'));
    }




    public function store(Request $request)
    {


        //Veirifica si o usuario logado é admnistrador
        if (!(Auth::check() && Auth::user()->is_admin)) {
            return redirect()->route('home');
        }

        //Retorna o numero de registros da tabela slides
        $QRegistro = Slide::count();
        if ($QRegistro == 3) {
            session()->flash('sucess', 'Apenas só podem ser cadastrado 3 slides');
            return redirect()->route('cadastrar_slide');
        }

        //Valida os campos
        $request->validate([
            'title' => 'max:20',
            'caption' => 'max:40',
            'image' => 'required|image|max:2048',
        ]);



        $imagePath = $request->file('image')->store('public/img/slides');

        $image = new Slide([
            'title' => $request->get('title'),
            'caption' => $request->get('caption'),
            'image_path' => $request->file('image')->hashName(),
        ]);
        $image->save();

        session()->flash('sucess', 'Slide cadastrado com sucesso');
        return redirect()->route('cadastrar_slide');
    }

    public function Destroy(Request $request, Slide $slide)
    {


        //Veirifica si o usuario logado é admnistrador
        if (!(Auth::check() && Auth::user()->is_admin)) {
            return redirect()->route('home');
        }

        // Traz o id da imagem e verifica si o mesmo está cadastrado no banco de dados
        $id = $request->input('id_slide');
        if (!$slide = $slide->find($id)) {
            return back();
        }
        // Delecta a imagem no banco de dados
        $slide->delete();

        // Delecta a imagem x que esta na pasta storage/app/public/img/slides/
        File::delete('storage/img/slides/' . $request->input('image'));


        session()->flash('sucess', 'Slide deletado com sucesso');
        return redirect()->route('slides');
    }
}
