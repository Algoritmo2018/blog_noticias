<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  @vite(['resources/sass/app.scss', 'resources/js/app.js'])
  <link rel="stylesheet" href="{{asset('css/estilos.css')}}">
  <link rel="stylesheet" href="{{asset('icons-main/font/bootstrap-icons.css')}}">
  <script src="{{asset('js/scripts.js')}}" defer></script>
  <title>Editar Categoria</title>
  <style>
    a{
      text-decoration: none;
    }
  </style>
</head>

<body>
 <!--inicio da Navbar-->
  @include('partials/navbaradm')
  <!--fim da Navbar-->


  <!-- Formulario de edição de comentario-->
  <div class="container d-flex justify-content-center mt-3 mb-2">

    <form action="{{route('update.comment', $comments->id)}}" method="post">
        @csrf
        @method('PUT')
      <div class="form-floating mt-3"><textarea class="form-control mb-2" name="comment" id="msg" style="height: 100px;"
        placeholder=" " cols="30" rows="10">{{$comments->comment}}</textarea>
    <label for="msg">Edite o seu comentario:</label>
    @if($errors->any())
    @foreach ($errors->all() as $error)
           {{$error}}

    @endforeach
    @endif
    <button type="submit" class="btn btn-primary">Guardar</button>
</div></form>
</div>


  <!--fim Formulario de edição de comentario-->


  <!--Inicio do footer-->

@include('partials/footer')

<!--Fim do footer-->

</body>

</html>
