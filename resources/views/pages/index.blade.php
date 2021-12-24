@extends('header')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--ICO-->
    <link rel="shortcut icon" href="{{ asset('img/LAIKAlogo.ico') }}">
    <!--CSS-->
    <link href="{{ asset('css/styleBody.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/stylem.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <!--BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
    <!--FONTAWESOME-->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!--TITLE-->
    <title>Laika Mascotas - Universo peludo</title>
</head>

<body>
    <!--CAROUSEL-->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6" aria-label="Slide 7"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="7" aria-label="Slide 8"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="8" aria-label="Slide 9"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="9" aria-label="Slide 10"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="10" aria-label="Slide 11"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('img/banner1.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/banner2.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/banner3.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item ">
                <img src="{{ asset('img/banner4.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/banner5.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/banner6.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item ">
                <img src="{{ asset('img/banner7.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/banner8.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/banner9.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item ">
                <img src="{{ asset('img/banner10.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/banner11.jpg') }}" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!--CATEGORIES-->
    <div>
        <h1 class="categoria">Categoría</h1>
        <div class="row mt-3 justify-content-center d-flex ">
            <div class="d-flex row  justify-content-center text-center" style="padding: 0px 200px 0px 200px;">
                <div class="col-2 d-flex">
                    <button class="btn-cat"><img src="{{ asset('img/alimento.png') }}" alt="Alimento" style="width: 25%;"> &nbsp;Alimento</button>
                </div>
                <div class="col-sm-2">
                    <button class="btn-cat"><img src="{{ asset('img/snacks.png') }}" alt="Alimento" style="width: 25%;"> &nbsp;Snacks</button>
                </div>
                <div class="col-sm-2">
                    <button class="btn-cat"><img src="{{ asset('img/farma.png') }}" alt="Alimento" style="width: 25%;"> &nbsp;FarmaPet</button>
                </div>
                <div class="col-sm-2">
                    <button class="btn-cat"><img src="{{ asset('img/higiene.png') }}" alt="Alimento" style="width: 25%;"> &nbsp;Cuidado</button>
                </div>
                <div class="col-sm-2">
                    <button class="btn-cat"><img src="{{ asset('img/juguetes.png') }}" alt="Alimento" style="width: 25%;"> &nbsp;Juguetes</button>
                </div>
                <div class="col-sm-2">
                    <button class="btn-cat"><img src="{{ asset('img/accesorios.png') }}" alt="Alimento" style="width: 25%;"> &nbsp;Accesorios</button>
                </div>
                <div class="col-sm-2">
                    <button class="btn-cat"><img src="{{ asset('img/petlover.png') }}" alt="Alimento" style="width: 25%;"> &nbsp;PetLovers</button>
                </div>

            </div>
        </div>
    </div>
    </div>
    <!--MARCAS DESTACADAS-->
    <div>
        <h1 class="categoria">Marcas Destacadas</h1>
        <section class="ftco-section" style="padding: 0px 0px 0px 10px;">
            <div class="container" style="padding: 0px 0px 0px 10px;">
                <div class="row" style="padding: 0px 0px 0px 10px;">
                    <div class="col-md-12" style="padding: 0px 0px 0px 10px;">
                        <div class="featured-carousel owl-carousel" style="padding: 0px 0px 0px 10px;">
                            <div class="item" style="padding: 0px 0px 0px 10px;">
                                <div class="work">
                                    <img src="{{ asset('img/hill.png') }}" alt="BARF" class="img-thumbnail d-flex align-items-center justify-content-center rounded">
                                </div>
                            </div>
                            <div class="item">
                                <div class="work">
                                    <img src="{{ asset('img/barf.png') }}" alt="BARF" class="img-thumbnail d-flex align-items-center justify-content-center rounded">
                                </div>
                            </div>
                            <div class="item">
                                <div class="work">
                                    <img src="{{ asset('img/canito.png') }}" alt="" class="img-thumbnail d-flex align-items-center justify-content-center rounded">
                                </div>
                            </div>
                            <div class="item">
                                <div class="work">
                                    <img src="{{ asset('img/equilibrio.png') }}" alt="" class="img-thumbnail d-flex align-items-center justify-content-center rounded">
                                </div>
                            </div>
                            <div class="item">
                                <div class="work">
                                    <img src="{{ asset('img/eukanuba.png') }}" alt="" class="img-thumbnail d-flex align-items-center justify-content-center rounded">
                                </div>
                            </div>
                            <div class="item">
                                <div class="work">
                                    <img src="{{ asset('img/fury.png') }}" alt="" class="img-thumbnail d-flex align-items-center justify-content-center rounded">
                                </div>
                            </div>
                            <div class="item">
                                <div class="work">
                                    <img src="{{ asset('img/max.png') }}" alt="" class="img-thumbnail d-flex align-items-center justify-content-center rounded">
                                </div>
                            </div>
                            <div class="item">
                                <div class="work">
                                    <img src="{{ asset('img/royal.png') }}" alt="" class="img-thumbnail d-flex align-items-center justify-content-center rounded">
                                </div>
                            </div>
                            <div class="item">
                                <div class="work">
                                    <img src="{{ asset('img/salvaje.png') }}" alt="" class="img-thumbnail d-flex align-items-center justify-content-center rounded">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!--PRODUCTOS-->
    <div class="mb-5">
        <h1 class="categoria">Un universo lleno de ofertas </h1>
        <div class="cards-products row">
            <div class="card mt-3 ml-5 mr-5 col-2" style="width: 18rem;">
                <img src="{{ asset('img/1.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Salvaje Dieta Horneada Natural Carne</h5>
                    <img src="{{ asset('img/star.png') }}" alt="stars" style="width: 40%;">
                    <p class="card-text titulos">$ 5.605 <strike class="subtitulos">$ 5.900</strike></p>
                    <hr>
                    <p class="card-text titulos">$ 4.720 <img src="{{ asset('img/member.png') }}" style="width: 80px;"></p>
                    <button class="peso">500 GR</button><br><br>
                    <button class="buy">Agregar al carrito</button>
                </div>
            </div>
            <div class="card mt-3 ml-5 mr-5 col-2" style="width: 18rem;">
                <img src="{{ asset('img/5.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Desenredante para peinar con Keratina 200 Gr</h5>
                    <img src="{{ asset('img/star.png') }}" alt="stars" style="width: 40%;">
                    <p class="card-text titulos">$ 17.600 <strike class="subtitulos">$ 20.230</strike></p>
                    <hr>
                    <p class="card-text titulos">$ 16.184 <img src="{{ asset('img/member.png') }}" style="width: 80px;"></p>
                    <button class="peso">165 Ml</button><br><br>
                    <button class="buy">Agregar al carrito</button>
                </div>
            </div>
            <div class="card mt-3 ml-5 mr-5 col-2" style="width: 18rem;">
                <img src="{{ asset('img/7.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Bocaditos CanAmor</h5>
                    <img src="{{ asset('img/star.png') }}" alt="stars" style="width: 40%;">
                    <p class="card-text titulos">$ 3.393 <strike class="subtitulos">$ 3.900</strike></p>
                    <hr>
                    <p class="card-text titulos">$ 3.120 <img src="{{ asset('img/member.png') }}" style="width: 80px;"></p>
                    <button class="peso">150 GR</button><br><br>
                    <button class="buy">Agregar al carrito</button>
                </div>
            </div>
        </div>
        <!--<hr class="divisor justify-content-center">-->
        <h1 class="categoria">Favoritos Laika </h1>
        <div class="cards-products row">
            <div class="card mt-3 ml-5 mr-5 col-2" style="width: 18rem;">
                <img src="{{ asset('img/8.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Chunky Deli Caprichos Tocineta Snack</h5>
                    <img src="{{ asset('img/star.png') }}" alt="stars" style="width: 40%;">
                    <p class="card-text titulos">$ 5.225 <strike class="subtitulos">$ 5.500</strike></p>
                    <hr>
                    <p class="card-text titulos">$ 4.400 <img src="{{ asset('img/member.png') }}" style="width: 80px;"></p>
                    <button class="peso">160 GR</button><br><br>
                    <button class="buy">Agregar al carrito</button>
                </div>
            </div>
            <div class="card mt-3 ml-5 mr-5 col-2" style="width: 18rem;">
                <img src="{{ asset('img/11.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Smartbones unidad smartsticks dental</h5>
                    <img src="{{ asset('img/star.png') }}" alt="stars" style="width: 40%;">
                    <p class="card-text titulos">$ 3.201 <strike class="subtitulos">$ 3.679</strike></p>
                    <hr>
                    <p class="card-text titulos">$ 2.943 <img src="{{ asset('img/member.png') }}" style="width: 80px;"></p>
                    <button class="peso">18 GR</button><br><br>
                    <button class="buy">Agregar al carrito</button>
                </div>
            </div>
            <div class="card mt-3 ml-5 mr-5 col-2" style="width: 18rem;">
                <img src="{{ asset('img/10.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Pedigree Alimento Humedo Para Perro</h5>
                    <img src="{{ asset('img/star.png') }}" alt="stars" style="width: 40%;">
                    <p class="card-text titulos">$ 2.436 <strike class="subtitulos">$ 2.800</strike></p>
                    <hr>
                    <p class="card-text titulos">$ 2.240 <img src="{{ asset('img/member.png') }}" style="width: 80px;"></p>
                    <button class="peso">100 GR</button><br><br>
                    <button class="buy">Agregar al carrito</button>
                </div>
            </div>
        </div>
    </div>
    <!--BANNER-->
    <div class="publicidad mb-3">
        <h1 class="publicidadt">Para una mejor<br><b>experiencia</b> para ti y tu<br><b>peludo descarga la app.</b></h1><br>
        <div class="btndown">
            <img src="{{ asset('img/APP.png') }}" class="downloadbtn" alt="">
            <img src="{{ asset('img/GOOGLEP.png') }}" class="downloadbtn" alt="">
            <img src="{{ asset('img/huaweiGallery.png') }}" class="downloadbtn" alt="">
        </div>
        <!-- 
        <div class="phone">
            <img src="{{ asset('img/phone.png') }}" alt="">
        </div>
        -->
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>
@extends('footer')
</html>