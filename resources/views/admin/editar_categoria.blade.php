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


  <div class=" d-md-none d-lg-none d-sm-none d-block"  style="height: 250px;"></div>
<div class="col-md d-sm-none d-lg-none d-md-block d-none"  style="height: 150px;"></div>
<div class="col-lg d-md-none d-sm-none d-lg-block d-none"  style="height: 130px;"></div>
<div class="col-sm d-md-none d-lg-none d-sm-block d-none"  style="height: 280px;"></div>



 <!--Rodape-->
  <footer   class="border-top text-bg-dark">
    <div class="container">
        <div class="row py-3">
            <div class="col-12 col-md-4 text-center">
                &copy; 2024 - Alda News<br>
                Rua Virtual Inexistente, 171, Compulândia/PC <br>
                CPNJ 99.999.999/0001-99
            </div>
            <div class="col-12 col-md-4 text-center text-bg-dark">
                <a href="privacidade.html" class="text-decoration-none text-white">
                    Política de Privacidade
                </a><br>
                <a href="termos.html" class="text-decoration-none text-white">
                    Termos de Uso
                </a><br>
                <a href="quemsomos.html" class="text-decoration-none text-white">
                    Quem Somos
                </a>
            </div>
            <div class="col-12 col-md-4 text-center text-bg-dark">
                <a href="/contato.html" class="text-decoration-none text-white">
                    Contato pelo Site
                </a><br>
                E-mail: <a href="mailto:email@dominio.com" class="text-decoration-none text-white">
                    aldanews@gmail.com
                </a><br>
                Telefone: <a href="phone:28999990000" class="text-decoration-none  text-white">
                    (+244) 938-092-678
                </a>
            </div>
        </div>
    </div>
</footer>
<!--Fim do Rodape-->
</body>

</html>
