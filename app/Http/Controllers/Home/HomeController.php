<?php


namespace App\Http\Controllers\Home;

use App\Models\Category;


class HomeController{



public function index(Category $category){

    $categories = $category->all();

    return view('index', compact('categories'));
}

public function artigo_completo(Category $category){

    $categories = $category->all();
    return view('artigo_completo', compact('categories'));
}
}

