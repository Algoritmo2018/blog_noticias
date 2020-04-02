<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  @vite(['resources/sass/app.scss', 'resources/js/app.js'])
  <link rel="stylesheet" href="{{asset('css/estilos.css')}}">
  <link rel="stylesheet" href="{{asset('icons-main/font/bootstrap-icons.css')}}">
  <script src="{{asset('js/scripts.js')}}" defer></script>
  <title>Editar Artigo</title>
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
 <!--inicio error-->
 @include('partials/error')
 <!--fim error-->

  <form>
    <h1>Editar Slide</h1>
    <hr class="mb-3">
    <div class="form-floating">
      <div class="col-md-12 mb-3">
            <img src="{{asset('upload/img/noticias/gemini.jpg')}}" alt="" class="img-fluid rounded w-50 h-50" >

    </div>
      <div class="col-md-12 mb-3">
        <label for="validationDefaultUsername">Titulo</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroupPrepend2">T</span>
          </div>
          <input type="text" class="form-control" id="validationDefaultUsername"   aria-describedby="inputGroupPrepend2" required>
        </div>
      </div>
      <div class="col-md-12 mb-3">
        <label for="validationDefaultUsername">Subtitulo</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroupPrepend2">S</span>
          </div> <input type="text" class="form-control" id="validationDefaultUsername"   aria-describedby="inputGroupPrepend2" required>
        </div>
      </div>




    <div class="col-md-12 mb-3">
      <label for="validationDefaultUsername">IMG</label>
      <div class="input-group">
        <input type="file" class="form-control" id="validationDefaultUsername"   aria-describedby="inputGroupPrepend2" required>
      </div>
    </div>
        </div>


      <button class="btn btn-primary" type="submit">Guardar</button>
  </form></div>


  <!--fim Formulario de cadastro-->


  <!--Inicio do footer-->

@include('partials/footer')

<!--Fim do footer-->

</body>

</html>
