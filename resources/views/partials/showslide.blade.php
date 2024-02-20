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
            <div class="carousel-item active" data-bs-interval="3000">
                <img src="{{asset('upload/img/noticias/gemini.jpg')}}" class="d-block w-100" height="300px" width="100px" alt="">
                <div class="carousel-caption d-none d-md-block"><h5 class="text-info">"Gemini"</h5>
                    <p class="text-info">Inteligencia artificial lançada pelo Google</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="1000">
                <img src="{{asset('upload/img/noticias/xadrez2.jpg')}}" class="d-block w-100" height="300px"
                    width="100px" alt="">
                    <div class="carousel-caption d-none d-md-block"><h5 class="text-info">"Xadrez"</h5>
                        <p class="text-info">Considerado por muitos como um dos melhores esportes da história.</p>
                    </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="{{asset('upload/img/noticias/espiritismo.jpg')}}" class="d-block w-100" height="300px" width="100px" alt="">
                <div class="carousel-caption d-none d-md-block"><h5 class="text-info">"Religião"</h5>
                    <p class="text-info">O espirito volta para Deus.</p>
                </div>
            </div>
        </div>

        <button class="carousel-control-prev" data-bs-target="#ads" data-bs-slide="prev"><span
                class="carousel-control-prev-icon"></span></button>
        <button class="carousel-control-next" data-bs-target="#ads" data-bs-slide="next"><span
                class="carousel-control-next-icon"></span></button>

    </div>
</div>
 <!--Fim Slide-->
