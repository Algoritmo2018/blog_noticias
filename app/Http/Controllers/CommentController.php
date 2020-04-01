<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUpdateComment;
use App\Models\Category;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{

    public function create(CreateUpdateComment $request, string $Id_article){

//Retorna o id do usuario logado
        $Id_user = Auth::id();

//Armazena o comentario no banco de dados
$comment = new Comment([
    'article_id' => $Id_article,
    'user_id' => $Id_user,
    'comment' => $request->input('comment'),
]);
$comment->save();

return back();
    }

    public function editar(string $id, Comment $comments, Category $category){


        if (!$comments = $comments->where('id', $id)->first()) {
            return back();
        }

       //Traz todas as categorias cadastradas no banco de dados
       $categories = $category->all();

        return view('editar_comentario', compact('comments', 'categories'));
    }

    public function UpdateComment(Comment $comments, CreateUpdateComment $request,string $id, Category $category){

        $newcomment = $request->input('comment');

        //
        if (!$comments = $comments->find($id)) {
            return back();
        }

        //Para atualizar campos que devem ser atualizados
           $comments->update([
            'comment' => $newcomment
           ]);


       //Traz todas as categorias cadastradas no banco de dados
       $categories = $category->all();

       return redirect()->route('artigo_completo', $comments->find($id)->article_id);
    }


    public function Destroy(string $id, Comment $comments)
    {

        // verifica si o id está cadastrado no banco de dados
        if (!$comments = $comments->find($id)) {
            return back();
        }
        // Delecta o comentario banco de dados
        $comments->delete();

        return back();
    }
}
