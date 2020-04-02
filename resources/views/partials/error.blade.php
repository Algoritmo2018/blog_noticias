<div class="col-12" style="color: rgb(161, 8, 8)">
    @if($errors->any())
    @foreach ($errors->all() as $error)
           {{$error}}

    @endforeach
    @endif
</div>
