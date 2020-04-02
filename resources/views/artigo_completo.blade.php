<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  @vite(['resources/sass/app.scss', 'resources/js/app.js'])
  <link rel="stylesheet" href="{{asset('css/estilos.css')}}">
  <link rel="stylesheet" href="{{asset('icons-main/font/bootstrap-icons.css')}}">
  <script src="{{asset('js/scripts.js')}}" defer></script>
  <title>Artigo completo</title>
  <style>
    a{
      text-decoration: none;
    }
  </style>
</head>

<body>
    <!--inicio da Navbar-->
@include('partials/navbar')
 <!--fim da Navbar-->



  <main class="mt-3">
    <div class="container d-flex flex-column">

      <img src="{{asset('storage/img/article/'.$articles->image_path)}}" alt="" class="img-fluid rounded  text-center" style="height: 300px">
      <small class="mt-2">{{$articles->category->categoria}} - {{$articles->created_at}}</small>
      <h5 class="mt-2">{{$articles->title}}</h5>
      <h6 class="mt-2">{{$articles->caption}}</h6>
      <p class="tex-right">{{$articles->content}}</p>

        <div>
      </div>
      <hr class="mt-3">

      <h2 class="mt-2">Comentarios</h2>
      <div class="row align-items-start">


        @foreach ($comments as $comment)
<div class="mb-2"></div>

        <div class="col-1"><i class="bi bi-person-circle fs-2"></i></div>
        <div class="col-11 mt-2"><strong>{{$comment->user->name}}</strong><br>
        <small>{{$comment->created_at}}</small>
      <p class="mt-2">{{$comment->comment}}</p>
      <div class="d-flex">

        <form action="{{route('editar.comment', $comment->id)}}" method="get">
            @csrf

        <button class="btn btn-primary me-2" type="submit">Editar</button>
    </form>
        <form action="{{route('delete.comment', $comment->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="submit">Eliminar</button></form></div>
      </div>
      @endforeach
      </div>

      <!--Menu de links-->
@include('partials/paginationcomment')
<!--Fim Menu de links-->


      <form action="{{route('create.comment', $articles->id)}}" method="post">
        @csrf
      <div class="form-floating mt-3"><textarea class="form-control mb-2" name="comment" id="msg" style="height: 100px;"
        placeholder=" " cols="30" rows="10"></textarea>
    <label for="msg">Escreva um comentario:</label>
    @if($errors->any())
    @foreach ($errors->all() as $error)
           {{$error}}

    @endforeach
    @endif
    <button type="submit" class="btn btn-primary">Guardar</button>
</div></form>
    </div>
  </main>


<!--Inicio do footer-->

@include('partials/footer')

<!--Fim do footer-->

</body>

</html>
