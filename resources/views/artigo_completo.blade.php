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
      <img src="{{asset('upload/img/noticias/gemini.jpg')}}" alt="" class="img-fluid rounded  text-center">
      <small class="mt-2">Tecnologia - JAN 04, 2024</small>
      <h5 class="mt-2">Nova inteligencia Atrifical do google</h5>
      <p class="tex-right">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque incidunt nostrum culpa recusandae ab repellendus eos id! Porro libero totam animi harum distinctio eligendi, itaque sapiente, ipsum unde obcaecati, ut vel et consequuntur laboriosam. Aspernatur error iste, a tempora fugiat officia. Ut sint ullam iste. Officia esse sunt dolor vel.</p>
      <p>Id Lorem eu ullamco id sint aliquip deserunt exercitation quis ex occaecat. Exercitation sint eiusmod do do laboris sint enim reprehenderit cillum cupidatat. Voluptate culpa dolor duis ipsum dolore excepteur ea et ea amet..</p>
      <p>Id Lorem eu ullamco id sint aliquip deserunt exercitation quis ex occaecat. Exercitation sint eiusmod do do laboris sint enim reprehenderit cillum cupidatat. Voluptate culpa dolor duis ipsum dolore excepteur ea et ea amet..</p>
      <p>Id Lorem eu ullamco id sint aliquip deserunt exercitation quis ex occaecat. Exercitation sint eiusmod do do laboris sint enim reprehenderit cillum cupidatat. Voluptate culpa dolor duis ipsum dolore excepteur ea et ea amet..</p>
      <p>Id Lorem eu ullamco id sint aliquip deserunt exercitation quis ex occaecat. Exercitation sint eiusmod do do laboris sint enim reprehenderit cillum cupidatat. Voluptate culpa dolor duis ipsum dolore excepteur ea et ea amet..</p>
      <p>Id Lorem eu ullamco id sint aliquip deserunt exercitation quis ex occaecat. Exercitation sint eiusmod do do laboris sint enim reprehenderit cillum cupidatat. Voluptate culpa dolor duis ipsum dolore excepteur ea et ea amet..</p>
      <div class="btn-toolbar" role="toolbar" aria-label="Toolbar com grupos de botões">
        <div class="btn-group me-2" role="group" aria-label="Primeiro grupo">
          <button type="button" class="btn btn-outline-info">Tecnologia</button>
        </div>
        <div class="btn-group mr-2" role="group" aria-label="Segundo grupo">
          <button type="button" class="btn btn-outline-info">Inovação</button>
        </div>
        <div class="btn-group" role="group" aria-label="Terceiro grupo">
        </div>
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
