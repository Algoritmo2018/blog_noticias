<?php

namespace App\Http\Controllers;

use App\Models\Image;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class ImageController extends Controller
{
    public function index()
    {
        $images = Image::all();

        return view('images.index', compact('images'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required|image|max:2048',
        ]);

        $imagePath = $request->file('image')->store('public/images');




        $image = new Image([
            'title' => $request->get('title'),
            'image_path' => $request->file('image')->hashName(),
        ]);
        $image->save();

        return redirect('/images')->with('success', 'Image uploaded successfully');
    }

    public function Destroy(Request $request, Image $image)
    {

        // Traz o id da imagem e verifica si o mesmo está cadastrado no banco de dados
        $id = $request->input('id_image');
        if (!$image = $image->find($id)) {
            return back();
        }
        // Delecta a imagem no banco de dados
        $image->delete();

        // Delecta a imagem x que esta na pasta storage/app/public/images
        File::delete('storage/images/' . $request->input('image'));

        return redirect()->route('images.index');
    }
}
