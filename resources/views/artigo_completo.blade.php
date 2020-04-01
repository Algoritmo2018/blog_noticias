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
      <img src="{{asset('storage/img/article/'.$articles->image_path)}}" alt="" class="img-fluid rounded  text-center">
      <small class="mt-2">{{$articles->category->categoria}} - {{$articles->created_at}}</small>
      <h5 class="mt-2">{{$articles->title}}</h5>
      <h6 class="mt-2">{{$articles->caption}}</h6>
      <p class="tex-right">{{$articles->content}}</p>
 
        <div>
      </div>
      <hr class="mt-3">

      <h2 class="mt-2">Comentarios</h2>
      <div class="row align-items-start">
        <div class="col-1"><i class="bi bi-person-circle fs-2"></i></div>
        <div class="col-11 mt-2"><strong>Luis Mateus</strong><br>
        <small>Jan 04, 2024 as 20:00</small>
      <p class="mt-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cumque similique facilis iusto reiciendis ipsum eius dolorem dolore inventore. Sapiente sint rerum sunt culpa nihil fuga ipsa dolores nostrum nisi perferendis.</p>
      <div><button class="btn btn-primary me-2">Editar</button><button class="btn btn-danger">Eliminar</button></div>
      </div>
      </div>
      <div class="form-floating mt-3"><textarea class="form-control mb-2" name="" id="msg" style="height: 100px;"
        placeholder=" " cols="30" rows="10"></textarea>
    <label for="msg">Escreva um comentario:</label>
    <button type="submit" class="btn btn-primary">Carregar</button>
</div>
    </div>
  </main>


<!--Inicio do footer-->

@include('partials/footer')

<!--Fim do footer-->

</body>

</html>
