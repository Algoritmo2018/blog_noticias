<div class="col-12 text-bg-danger text-center rounded" >
    @if($errors->any())
    @foreach ($errors->all() as $error)
           {{$error}}

    @endforeach
    @endif
</div>
