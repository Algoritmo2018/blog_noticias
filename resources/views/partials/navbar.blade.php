<nav class="navbar bg-dark navbar-dark  navbar-expand-sm sticky-top">
    <div class="container ">
      <a href="" class="navbar-brand d-flex align-items-center">
        <i class="bi-newspaper fs-1 me-2"></i>Alda News</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuNavbar"><span
          class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse d-lg-flex flex-column" id="menuNavbar">
        <div class="navbar-nav ms-auto">
          <a href="{{route('home')}}" class="nav-link  active">Home</a>
          <a class="nav-link" href="#painel" data-bs-toggle="offcanvas">Pesquisar</a>
          <a href="#categorias" class="nav-link" data-bs-toggle="offcanvas">Mais</a>



        </div>
      </div>

    </div>
  </nav>
  <!--Painel de pesquisa-->
  <div class="offcanvas offcanvas-top text-bg-dark" id="painel" tabindex="1" data-bs-scroll="true"
    data-bs-backdrop="static" style="--bs-offcanvas-heigth:100px;">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title">Pesquisar</h5>
      <button class="btn-close" style="background-color: rgb(173, 2, 2);"  data-bs-dismiss="offcanvas"></button>
    </div>
    <form action="{{route('article.search1')}}" method="get">
        @csrf
    <div class="offcanvas-body">
      <div class="input-group mt-2">

        <input type="search" name="search" id="" class="form-control">
        <button class="btn btn-primary" type="submit">
          <i class="bi-search"></i>
        </button>
      </div>
    </div></form>

  </div>
  <!--fim Painel de pesquisa-->
  <!--Painel de categorias-->
  <div class="offcanvas offcanvas-start text-bg-dark" id="categorias" tabindex="1" data-bs-scroll="true"
    data-bs-backdrop="static" style="--bs-offcanvas-width:250px;">

      @if (Route::has('login'))
      @auth
      <div class="offcanvas-header">
        <h5 class="offcanvas-title">Usuario</h5>
        <button class="btn-close btn btn-light" style="background-color: rgb(0, 183, 255);" data-bs-dismiss="offcanvas"></button>
      </div>
      <div class="offcanvas-body ">
         <ul class="pagination d-flex flex-column justify-content-start">
            <li class="page-item mb-2">
                <a href="#" class="nav-link text-">Olá, {{Auth::user()->name}}</a>
              </li> <li class="page-item mb-2">
            <a href="{{route('profile.edit')}}" class="nav-link">Perfil</a>
          </li><li class="page-item mb-5">
              <!-- Authentication -->
              <form method="POST" action="{{ route('logout') }}">
                @csrf
              <a href="{{route('logout')}}" class="nav-link text-small text-danger" onclick="event.preventDefault();
              this.closest('form').submit();">
                Terminar sessão</a>
            </form>
          </li>
        </ul>
        </div>
        @else
        <div class="offcanvas-header">
            <h5 class="offcanvas-title">Links</h5>
            <button class="btn-close btn btn-light" style="background-color: rgb(0, 183, 255);" data-bs-dismiss="offcanvas"></button>
          </div>
          <div class="offcanvas-body ">
             <ul class="pagination d-flex flex-column justify-content-start">
                @if (Route::has('register'))
               <li class="page-item mb-2">
                <a href="{{ route('register') }}" class="nav-link">Cadastrar-se</a>
              </li>
              @endif
              <li class="page-item mb-5">
                  <a href="{{ route('login') }}" class="nav-link">Login</a>
              </li>
            </ul>
            </div>
            @endauth
            @endif

    <div class="offcanvas-header">
      <h5 class="offcanvas-title">Categorias</h5>
    </div>
    <div style="margin-bottom: -7%"></div>
    <div class="offcanvas-body">
       <ul class="pagination d-flex flex-column justify-content-start ">
        @foreach ($categories as $category)
        <form action="{{route('article.search.category')}}"><li class="page-item mb-2">
<input type="hidden" name="scategory" value="{{$category->id}}">
<a href="{{route('article.search.category')}}" class="nav-link" onclick="event.preventDefault();
this.closest('form').submit();">{{$category->categoria}}</a>
           </li></form>
      @endforeach
      </ul>
      </div>

  </div>
  <!--fim Painel de categorias-->
