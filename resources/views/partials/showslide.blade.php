 <!--Slide-->
 <div class="container py-5">
    <div class="carousel slide carousel-fade" id="ads" data-bs-ride="carousel" data-bs-touch="true">
        <div class="carousel-indicators">
            <button class="active" data-bs-target="#ads"
                data-bs-slide-to="0"></button>
                <button data-bs-target="#ads" data-bs-slide-to="1"></button>
                <button
                data-bs-target="#ads" data-bs-slide-to="2"></button></div>
        <div class="carousel-inner">
            @foreach ($slides as $slide)
            <div class="carousel-item active" data-bs-interval="2000">
                <img src="{{asset('storage/img/slides/'.$slide->image_path)}}" class="d-block w-100 rounded" height="300px" width="100px" alt="">
                <div class="carousel-caption d-none d-md-block"><h5 class="text-info">{{$slide->title}}</h5>
                    <p class="text-info">{{$slide->caption}}</p>
                </div>
            </div>
            @endforeach
        </div>

        <button class="carousel-control-prev" data-bs-target="#ads" data-bs-slide="prev"><span
                class="carousel-control-prev-icon"></span></button>
        <button class="carousel-control-next" data-bs-target="#ads" data-bs-slide="next"><span
                class="carousel-control-next-icon"></span></button>

    </div>
</div>
 <!--Fim Slide-->
