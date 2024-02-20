<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  @vite(['resources/sass/app.scss', 'resources/js/app.js'])
  <link rel="stylesheet" href="{{asset('css/estilos.css')}}">
  <link rel="stylesheet" href="{{asset('icons-main/font/bootstrap-icons.css')}}">
  <script src="{{asset('js/scripts.js')}}" defer></script>
  <title>Blog de noticias</title>
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


  <!--inicio do slide-->
  @include('partials/showslide')
  <!--fim do slide-->
 <!--Menu de links-->
<div class="container"><hr class="mt-3">

  <div class="row pb-3">
      <div class="col-12">
          <div class="d-flex flex-row justify-content-center justify-content-md-center">

              <nav class="d-inline-block me-3 ">
                  <ul class="pagination pagination-sm my-0">
                      <li class="page-item">
                          <a class="page-link text-bg-dark fs-5" href="#">1</a>
                      </li>
                      <li class="page-item">
                          <a class="page-link text-bg-dark fs-5" href="#">2</a>
                      </li>
                      <li class="page-item disabled">
                          <a class="page-link text-bg-dark fs-5" href="#">3</a>
                      </li>
                      <li class="page-item">
                          <a class="page-link text-bg-dark fs-5" href="#">4</a>
                      </li>
                      <li class="page-item">
                          <a class="page-link text-bg-dark fs-5" href="#">5</a>
                      </li>
                      <li class="page-item">
                          <a class="page-link text-bg-dark fs-5" href="#">6</a>
                      </li>
                  </ul>
              </nav>
          </div>
      </div>
  </div><hr class="mt-3"></div>
  <!--Fim Menu de links-->
 <!--Tecnologia-->
 <div class="container py-5">
  <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-2">
    <div class="col" data-anima="esquerda">
      <div class="card h-100">
        <img src="{{asset('upload/img/noticias/gemini.jpg')}}" alt="" class="card-img-top">
        <div class="card-body">
         <small>Tecnologia - JAN 04, 2024</small>
                <h5 class="card-title">Nova inteligencia Atrifical do google</h5>
                <h6 class="car-subtitule">Gemini</h6>
                <p class="card-text">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veritatis a sed at
                        minima unde eius, sapiente officia d...</p>
                <a href="{{route('artigo_completo')}}" class="card-link">Ler a materia</a>
        </div>
</div></div><div class="col" data-anima="centro">
      <div class="card h-100">
        <img src="{{asset('upload/img/noticias/gemini.jpg')}}" alt="" class="card-img-top">
        <div class="card-body">
         <small>Tecnologia - JAN 04, 2024</small>
                <h5 class="card-title">Nova inteligencia Atrifical do google</h5>
                <h6 class="car-subtitule">Gemini</h6>
                <p class="card-text">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veritatis a sed at
                        minima unde eius, sapiente officia d...</p>
                <a href="{{route('artigo_completo')}}" class="card-link">Ler a materia</a>
        </div>
</div></div><div class="col" data-anima="direita">
      <div class="card h-100">
        <img src="{{asset('upload/img/noticias/gemini.jpg')}}" alt="" class="card-img-top">
        <div class="card-body">
         <small>Tecnologia - JAN 04, 2024</small>
                <h5 class="card-title">Nova inteligencia Atrifical do google</h5>
                <h6 class="car-subtitule">Gemini</h6>
                <p class="card-text">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veritatis a sed at
                        minima unde eius, sapiente officia d...</p>
                <a href="{{route('artigo_completo')}}" class="card-link">Ler a materia</a>
        </div>
</div></div></div>
</div>
<!--Fim  Tecnologia-->

 <!--Tecnologia-->
 <div class="container py-5">
  <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-2">
    <div class="col" data-anima="esquerda">
    <div class="card h-100">
            <img src="{{asset('upload/img/noticias/gemini.jpg')}}" alt="" class="card-img-top">
            <div class="card-body">
             <small>Tecnologia - JAN 04, 2024</small>
                    <h5 class="card-title">Nova inteligencia Atrifical do google</h5>
                    <h6 class="car-subtitule">Gemini</h6>
                    <p class="card-text">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veritatis a sed at
                            minima unde eius, sapiente officia d...</p>
                    <a href="{{route('artigo_completo')}}" class="card-link">Ler a materia</a>
            </div>
    </div></div>
    <div class="col" data-anima="centro">
      <div class="card h-100">
        <img src="{{asset('upload/img/noticias/gemini.jpg')}}" alt="" class="card-img-top">
        <div class="card-body">
         <small>Tecnologia - JAN 04, 2024</small>
                <h5 class="card-title">Nova inteligencia Atrifical do google</h5>
                <h6 class="car-subtitule">Gemini</h6>
                <p class="card-text">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veritatis a sed at
                        minima unde eius, sapiente officia d...</p>
                <a href="{{route('artigo_completo')}}" class="card-link">Ler a materia</a>
        </div>
</div></div><div class="col" data-anima="direita">
  <div class="card h-100">
    <img src="{{asset('upload/img/noticias/gemini.jpg')}}" alt="" class="card-img-top">
    <div class="card-body">
     <small>Tecnologia - JAN 04, 2024</small>
            <h5 class="card-title">Nova inteligencia Atrifical do google</h5>
            <h6 class="car-subtitule">Gemini</h6>
            <p class="card-text">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veritatis a sed at
                    minima unde eius, sapiente officia d...</p>
            <a href="{{route('artigo_completo')}}" class="card-link">Ler a materia</a>
    </div>
</div></div></div>
</div>
<!--Fim  Tecnologia-->
 <!--Tecnologia-->
 <div class="container py-5">
  <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-2">
    <div class="col" data-anima="esquerda">
      <div class="card h-100">
        <img src="{{asset('upload/img/noticias/gemini.jpg')}}" alt="" class="card-img-top">
        <div class="card-body">
         <small>Tecnologia - JAN 04, 2024</small>
                <h5 class="card-title">Nova inteligencia Atrifical do google</h5>
                <h6 class="car-subtitule">Gemini</h6>
                <p class="card-text">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veritatis a sed at
                        minima unde eius, sapiente officia d...</p>
                <a href="{{route('artigo_completo')}}" class="card-link">Ler a materia</a>
        </div>
</div></div>
    <div class="col" data-anima="centro">
      <div class="card h-100">
        <img src="{{asset('upload/img/noticias/gemini.jpg')}}" alt="" class="card-img-top">
        <div class="card-body">
         <small>Tecnologia - JAN 04, 2024</small>
                <h5 class="card-title">Nova inteligencia Atrifical do google</h5>
                <h6 class="car-subtitule">Gemini</h6>
                <p class="card-text">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veritatis a sed at
                        minima unde eius, sapiente officia d...</p>
                <a href="{{route('artigo_completo')}}" class="card-link">Ler a materia</a>
        </div>
</div></div><div class="col" data-anima="direita">
  <div class="card h-100">
    <img src="{{asset('upload/img/noticias/gemini.jpg')}}" alt="" class="card-img-top">
    <div class="card-body">
     <small>Tecnologia - JAN 04, 2024</small>
            <h5 class="card-title">Nova inteligencia Atrifical do google</h5>
            <h6 class="car-subtitule">Gemini</h6>
            <p class="card-text">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veritatis a sed at
                    minima unde eius, sapiente officia d...</p>
            <a href="{{route('artigo_completo')}}" class="card-link">Ler a materia</a>
    </div>
</div></div></div>
</div>
<!--Fim  Tecnologia-->
<!--Menu de links-->
<div class="container"><hr class="mt-3">

<div class="row pb-3">
    <div class="col-12">
        <div class="d-flex flex-row justify-content-center justify-content-md-center">

            <nav class="d-inline-block me-3 ">
                <ul class="pagination pagination-sm my-0">
                    <li class="page-item">
                        <a class="page-link text-bg-dark fs-5" href="#">1</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link text-bg-dark fs-5" href="#">2</a>
                    </li>
                    <li class="page-item disabled">
                        <a class="page-link text-bg-dark fs-5" href="#">3</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link text-bg-dark fs-5" href="#">4</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link text-bg-dark fs-5" href="#">5</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link text-bg-dark fs-5" href="#">6</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div><hr class="mt-1"></div>
<!--Fim Menu de links-->
<div class=" d-md-none d-lg-none d-sm-none d-block"  style="height: 250px;"></div>
<div class="col-md d-sm-none d-lg-none d-md-block d-none"  style="height: 150px;"></div>
<div class="col-lg d-md-none d-sm-none d-lg-block d-none"  style="height: 130px;"></div>
<div class="col-sm d-md-none d-lg-none d-sm-block d-none"  style="height: 280px;"></div>

 <!--Rodape-->
  <footer   class="border-top text-bg-dark ">
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
