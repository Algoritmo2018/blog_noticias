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

   <!--inicio do slide-->
   @include('partials/showslide')
   <!--fim do slide-->

<!--Menu de links-->

@include('partials/pagination')

<!--Fim Menu de links-->

 <!--Tecnologia-->
 <div class="container py-5">
  <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-2">

    @foreach ($articles as $article)
<div class="col" data-anima="centro">
      <div class="card h-100">
        <img src="{{asset('storage/img/article/'.$article->image_path)}}" alt="" class="card-img-top">
        <div class="card-body">
         <small>{{$article->category->categoria}} - {{$article->created_at}}</small>
                <h5 class="card-title">{{$article->title}}</h5>
                <h6 class="car-subtitule">{{$article->caption}}</h6>
                <p class="card-text">{{$article->content}}</p>
                <a href="{{route('editar_artigo', $article->id)}}" class="card-link">Editar Artigo</a>
        </div>
</div></div>
@endforeach
 </div>
</div>
<!--Fim  Tecnologia-->

<!--Menu de links-->

@include('partials/pagination')

<!--Fim Menu de links-->


<!--Inicio do footer-->

@include('partials/footer')

<!--Fim do footer-->


</body>

</html>
