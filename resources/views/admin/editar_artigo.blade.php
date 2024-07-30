<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <link rel="stylesheet" href="{{ asset('icons-main/font/bootstrap-icons.css') }}">
    <script src="{{ asset('js/scripts.js') }}" defer></script>
    <title>Editar Artigo</title>
    <style>
        a {
            text-decoration: none;
        }
    </style>
</head>

<body>
    <!--inicio da Navbar-->
    @include('partials/navbaradm')
    <!--fim da Navbar-->


    <!-- Formulario de cadastro-->
    <div class="container d-flex-column justify-content-center mt-3 mb-2">
        <!--inicio error-->
        @include('partials/error')
        <!--fim error-->

        <form action="{{ route('update_article', $articles->id) }}" method="post" enctype="multipart/form-data">
            @csrf()
            @method('PUT')
            <h3>Editar artigo</h3>
            <hr class="mb-3">
            <div class="form-floating">
                <div class="col-md-12 mb-3">
                    <img src="{{ asset('storage/img/article/' . $articles->image_path) }}" alt="" name="image"
                        class="img-fluid rounded" style="height: 200px">

                </div>
                <div class="col-md-12 mb-3">
                    <label for="validationDefaultUsername">Titulo</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupPrepend2">T</span>
                        </div>
                        <input type="text" class="form-control" id="validationDefaultUsername" name="title"
                            aria-describedby="inputGroupPrepend2" value="{{ $articles->title }}" required>
                    </div>
                </div>
                <div class="col-md-12 mb-3">
                    <label for="validationDefaultUsername">Subtitulo</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupPrepend2">S</span>
                        </div> <input type="text" name="caption" class="form-control" id="validationDefaultUsername"
                            value="{{ $articles->caption }}" aria-describedby="inputGroupPrepend2">
                    </div>
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Categoria</label>
                    </div>
                    <select class="form-select  col-md-12 rounded-2" id="inputGroupSelect01" name="category_id">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->categoria }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-floating mt-3">
                    <textarea class="form-control mb-2" name="content" id="msg" style="height: 100px;" placeholder=" " cols="30"
                        rows="10">{{ $articles->content }}</textarea>
                    <label for="msg">Escreva o conteudo do artigo:</label>
                </div>
                <div class="col-md-12 mb-3">
                    <label for="validationDefaultUsername">IMG</label>
                    <div class="input-group">

                        <input type="hidden" class="form-control" id="validationDefaultUsername" name="image"
                            value="{{ $articles->image_path }}" aria-describedby="inputGroupPrepend2">
                        <input type="file" class="form-control" id="validationDefaultUsername" name="imagenew"
                            aria-describedby="inputGroupPrepend2">
                    </div>
                </div>
            </div>


            <button class="btn btn-primary" type="submit">Guardar</button>
        </form>
        <button class="btn btn-danger" data-bs-toggle="modal"
            data-bs-target="#delete-{{ $articles->id }}">Apagar</button>
        @component('components.modal_delete')
            @slot('id')
                {{ $articles->id }}
            @endslot
            @slot('route')
                {{ route('destroy_article', $articles->id) }}
            @endslot
            @slot('elements')
                <input type="hidden" class="form-control" id="validationDefaultUsername" name="image"
                    value="{{ $articles->image_path }}" aria-describedby="inputGroupPrepend2">
            @endslot
        @endcomponent
        </form>
    </div>


    <!--fim Formulario de cadastro-->


    <!--Inicio do footer-->

    @include('partials/footer')

    <!--Fim do footer-->

</body>

</html>
