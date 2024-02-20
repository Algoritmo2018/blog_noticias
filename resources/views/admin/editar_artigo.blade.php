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

  <form>
    <h1>Editar artigo</h1>
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
        <label for="validationDefaultUsername">Data</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroupPrepend2">D</span>
          </div>
          <input type="date" class="form-control" id="validationDefaultUsername"   aria-describedby="inputGroupPrepend2" required>
        </div>
      </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <label class="input-group-text" for="inputGroupSelect01">Categoria</label>
            </div>
            <select class="form-select  col-md-12 rounded-2" id="inputGroupSelect01">
              <option selected>Escolher...</option>
              <option value="1">Arte</option>
              <option value="2">Tecnologia</option>
              <option value="3">Politica</option>
            </select>
          </div>

          <div class="form-floating mt-3"><textarea class="form-control mb-2" name="" id="msg" style="height: 100px;"
            placeholder=" " cols="30" rows="10"></textarea>
        <label for="msg">Escreva o conteudo do artigo:</label>
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
