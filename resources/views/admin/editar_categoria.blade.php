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


  <!-- Formulario de cadastro-->
  <div class="container d-flex justify-content-center mt-3 mb-2">

  <form action="{{route('update_categoria', $category->id)}}" method="post">
    @csrf()
    @method('PUT')
    <h1>Editar Categoria</h1>
    <hr class="mb-3">
    <div class="form-floating">

      <div class="col-md-12 mb-3">
        <label for="validationDefaultUsername">Categoria</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroupPrepend2">C</span>
          </div>
          <input type="text" class="form-control" id="validationDefaultUsername"   aria-describedby="inputGroupPrepend2" name="categoria" value="{{$category->categoria}}" required>
        </div>
      </div>
        </div>

        @if($errors->any())
        @foreach ($errors->all() as $error)
               {{$error}}

        @endforeach
        @endif
      <button class="btn btn-primary" type="submit">Guardar</button>
  </form> <form action="{{route('destroy_categoria', $category->id)}}" method="POST">
    @csrf()
    @method('DELETE')
    <button class="btn btn-danger" type="submit">Apagar</button></form></div>


  <!--fim Formulario de cadastro-->


  <!--Inicio do footer-->

@include('partials/footer')

<!--Fim do footer-->

</body>

</html>
