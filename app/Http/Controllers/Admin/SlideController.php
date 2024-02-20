<?php

namespace App\Http\Controllers\Admin;

use App\Models\Slide;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class SlideController extends Controller
{



    public function SlidesCadastrados(Category $category)
    {
        $categories = $category->all();
        $slides = Slide::all();

        return view('admin/slides', compact('categories', 'slides'));
    }




    public function store(Request $request)
    {
        //Retorna o numero de registros da tabela slides
        $QRegistro = Slide::count();
        if ($QRegistro == 3) {
            return back();
        }

        //Valida os campos
        $request->validate([
            'title' => 'required|min:4|max:15|unique:slides',
            'caption' => 'required|min:4|max:40',
            'image' => 'required|image|max:2048',
        ]);



        $imagePath = $request->file('image')->store('public/img/slides');

        $image = new Slide([
            'title' => $request->get('title'),
            'caption' => $request->get('caption'),
            'image_path' => $request->file('image')->hashName(),
        ]);
        $image->save();

        return redirect()->route('cadastrar_slide');
    }

    public function Destroy(Request $request, Slide $slide)
    {

        // Traz o id da imagem e verifica si o mesmo está cadastrado no banco de dados
        $id = $request->input('id_slide');
        if (!$slide = $slide->find($id)) {
            return back();
        }
        // Delecta a imagem no banco de dados
        $slide->delete();

        // Delecta a imagem x que esta na pasta storage/app/public/img/slides/
        File::delete('storage/img/slides/' . $request->input('image'));

        return redirect()->route('slides');
    }
}
