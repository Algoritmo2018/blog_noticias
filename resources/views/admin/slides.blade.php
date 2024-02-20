<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  @vite(['resources/sass/app.scss', 'resources/js/app.js'])
  <link rel="stylesheet" href="{{asset('css/estilos.css')}}">
  <link rel="stylesheet" href="{{asset('icons-main/font/bootstrap-icons.css')}}">
  <script src="{{asset('js/scripts.js')}}" defer></script>
  <title>Modo Adm</title>
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


 <!--Tecnologia-->
 <div class="container py-5">
  <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-2">

    @foreach ($slides as $slide)
    <div class="col" >
      <div class="card h-100">
        <img src="{{ asset('storage/img/slides/'.$slide->image_path) }}" alt="" class="card-img-top">
        <div class="card-body">
                <h5 class="card-title">{{$slide->title}}</h5>
                <h6 class="car-subtitule">{{$slide->caption}}</h6>

                <form action="{{ route('destroy.slide', $slide->id) }}" method="POST">
                    @csrf()
                    @method('DELETE')

                    <input type="hidden" name="id_slide" id="image" class="form-control"  value="{{$slide->id}}">
                <input type="hidden" name="image" id="image" class="form-control"  value="{{$slide->image_path}}">
                    <button class="btn btn-danger" type="submit">Apagar</button></form></div>
</div></div>
@endforeach

     </div></div>
<!--Fim  Tecnologia-->

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
