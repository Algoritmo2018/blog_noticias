<?php

namespace App\Http\Controllers\Admin;

use App\Models\Article;
 use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateArticle;

class ArticleController extends Controller
{

    public function create(StoreUpdateArticle $request)
    {

        $imagePath = $request->file('image')->store('public/img/article');

        $image = new Article([
            'title' => $request->get('title'),
            'caption' => $request->get('caption'),
            'category_id' => $request->get('category_id'),
            'content' => $request->get('content'),
            'image_path' => $request->file('image')->hashName(),
        ]);
        $image->save();

        return redirect()->route('cadastrar_artigo');
    }
}
