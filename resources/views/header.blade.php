<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--ICO-->
    <link rel="shortcut icon" href="{{ asset('img/LAIKAlogo.ico') }}">
    <!--CSS-->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/nav.css') }}" rel="stylesheet">
    <!--BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <!--FONTAWESOME-->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!--TITLE-->
    <title>Laika Mascotas - Universo peludo</title>
</head>

<body>
    <!--HEADER-->
    <div class="info d-flex justify-content-between align-items-center ">
        <span class="header ml-6 my-auto"><i class="fas fa-shield-alt"></i> &nbsp;Compras seguras online&nbsp; | &nbsp;<i class="fas fa-hand-holding-usd"></i> &nbsp;Pago Contra Entrega &nbsp;| &nbsp;<i class="fas fa-truck-moving"></i> &nbsp;Entregas el mismo dia&nbsp; |&nbsp;</span>
        <span class="header ml-6 my-auto">Llámanos &nbsp;<i class="fas fa-phone-square"></i> &nbsp;| &nbsp;3009108496 &nbsp; | &nbsp; <a class="a-header">Escríbenos</a> &nbsp; <a class="a-header"><i class="fab fa-youtube"></i></a> &nbsp;<a class="a-header"><i class="fab fa-instagram"></i></a>&nbsp;<a class="a-header"> <i class="fab fa-facebook-square"></i></a></span>
    </div>
    <div class="d-block d-sm-block d-md-none"></div>
    <div class="info-violet row d-flex justify-content-around align-items-center ">
        <img src="{{ asset('img/LAIKA.png') }}" alt="logo" class="logo d-flex mt-1 col-2" style="width: 7%;">
        <div class="input-group rounded col-4" style="width: 40%">
            <input type="search" class="form-control  rounded" placeholder="Encuentra lo mejor para tu mascota." aria-label="Search" aria-describedby="search-addon" />
            <span class="input-group-text border-0" id="search-addon">
                <i class="fas fa-search"></i>
            </span>
        </div>
        <div class="badge d-flex col-3">
            <img src="{{ asset('img/col.png')}}" alt="COL" class="logo2 mt-1" style="width: 10%;">&nbsp;&nbsp;&nbsp;
            <select class="sel form-select" name="" id="" style="width: 30%; height: 5%;">
                <option value="" selected>BOG</option>
                <option value="">MEX</option>
            </select>
        </div>
        <div class="d-flex col-3 align-items-center">
            <img src="{{ asset('img/user.png')}}" alt="USER" class="logo2 mt-1 d-none d-sm-none d-md-block">&nbsp;&nbsp;&nbsp;
            <p class="account d-none d-sm-none d-md-block">Mi cuenta</p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <img src="{{ asset('img/cart.png')}}" alt="USER" class="logo2 mt-1 ">&nbsp;&nbsp;&nbsp;
        </div>
    </div>
    <!--NAVBAR-->
    <nav class="navbar navbar-expand-lg navbar-light ">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-flex justify-content-between align-items-center" id="main_nav">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown"><!--SUBMENU PERRO-->
                        <a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown">Compra para perro</a>
                        <ul class="dropdown-menu">
                            <div style="width: 1050px; height: 350px;">
                                <table style="width: 100%">
                                    <tr>
                                        <th style="width: 60px;"><img src="{{ asset('img/alimento.png')}}" alt="COL" class="logo2 mt-1" style="width: 15%;"> Alimento</th>
                                        <th style="width: 60px;"><img src="{{ asset('img/snacks.png')}}" alt="COL" class="logo2 mt-1" style="width: 15%;"> Snacks</th>
                                        <th style="width: 60px;"><img src="{{ asset('img/farma.png')}}" alt="COL" class="logo2 mt-1" style="width: 15%;"> FarmaPet</th>
                                        <th style="width: 60px;"><img src="{{ asset('img/higiene.png')}}" alt="COL" class="logo2 mt-1" style="width: 15%;"> Cuidado</th>
                                        <th style="width: 60px;"><img src="{{ asset('img/juguetes.png')}}" alt="COL" class="logo2 mt-1" style="width: 15%;"> Juguetes</th>
                                        <th style="width: 60px;"><img src="{{ asset('img/accesorios.png')}}" alt="COL" class="logo2 mt-1" style="width: 15%;"> Accesorios</th>
                                        <th style="width: 60px;"><img src="{{ asset('img/petlover.png')}}" alt="COL" class="logo2 mt-1" style="width: 15%;"> PetLovers</th>
                                    </tr>
                                    <tr>
                                        <td><a class="linka">Concentrado</a></td>
                                        <td><a class="linka">Galletas</a></td>
                                        <td><a class="linka">Antiparasitarios</a></td>
                                        <td><a class="linka">Higiene </a></td>
                                        <td><a class="linka">Pelotas </a></td>
                                        <td><a class="linka">Collares</a></td>
                                        <td><a class="linka">Manos Libres</a></td>
                                    </tr>
                                    <tr>
                                        <td><a class="linka">Humedo</a></td>
                                        <td><a class="linka">Brownies y otros </a></td>
                                        <td><a class="linka">Suplementos </a></td>
                                        <td><a class="linka">Cepillos</a></td>
                                        <td><a class="linka">Cuerdas</a></td>
                                        <td><a class="linka">Ropa</a></td>
                                        <td><a class="linka">Adornos</a></td>
                                    </tr>
                                    <tr>
                                        <td><a class="linka">Dietas Naturales</a></td>
                                        <td><a class="linka">Tortas de Celebración</a></td>
                                        <td><a class="linka">Analgésicos </a></td>
                                        <td><a class="linka">Corta Uñas </a></td>
                                        <td><a class="linka">Muñecos</a></td>
                                        <td><a class="linka">Pañoletas</a></td>
                                        <td><a class="links">Ver más</a></td>
                                    </tr>
                                    <tr>
                                        <td><a class="links">Ver más</a></td>
                                        <td><a class="linka">Huesos y Carnaza </a></td>
                                        <td><a class="linka">Antibacterianos </a></td>
                                        <td><a class="linka">Cuidado Hogar</a></td>
                                        <td><a class="linka">Inflables</a></td>
                                        <td><a class="linka">Gorra</a></td>
                                    </tr>
                                    <tr>
                                        <td><a class="linka"></a></td>
                                        <td><a class="linka">Galletas y Snacks</a></td>
                                        <td><a class="linka">Antibióticos </a></td>
                                        <td><a class="linka">Cuidado Oral </a></td>
                                        <td><a class="links">Ver más</a></td>
                                        <td><a class="links">Ver más</a></td>
                                    </tr>
                                    <tr>
                                        <td><a class="linka"></a></td>
                                        <td><a class="links">Ver más</a></td>
                                        <td><a class="linka">Antipulgas y Garrapatas</a></td>
                                        <td><a class="linka">Protector Vehículos </a></td>
                                        <td><a class="linka"></a></td>
                                        <td><a class="linka"></a></td>
                                    </tr>
                                    <tr>
                                        <td><a class="linka"></a></td>
                                        <td><a class="linka"></a></td>
                                        <td><a class="linka">Articulaciones </a></td>
                                        <td><a class="linka">Residuos de Mascotas </a></td>
                                        <td><a class="linka"></a></td>
                                        <td><a class="linka"></a></td>
                                    </tr>
                                    <tr>
                                        <td><a class="links"></a></td>
                                        <td><a class="linka"></a></td>
                                        <td><a class="links">Ver más</a></td>
                                        <td><a class="links">Ver más</a></td>
                                        <td><a class="linka"></a></td>
                                        <td><a class="linka"></a></td>
                                    </tr>
                                </table>
                            </div>
                        </ul>
                    </li>
                    <li class="nav-item dropdown"><!--SUBMENU GATO-->
                        <a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown">Compra para gato</a>
                        <ul class="dropdown-menu">
                            <div style="width: 900px; height: 250px;">
                                <table style="width: 100%">
                                    <tr>
                                        <th style="width: 60px;"><img src="{{ asset('img/alimento.png')}}" alt="COL" class="logo2 mt-1" style="width: 15%;"> Alimento</th>
                                        <th style="width: 60px;"><img src="{{ asset('img/snacks.png')}}" alt="COL" class="logo2 mt-1" style="width: 15%;"> Snacks</th>
                                        <th style="width: 60px;"><img src="{{ asset('img/farma.png')}}" alt="COL" class="logo2 mt-1" style="width: 15%;"> FarmaPet</th>
                                        <th style="width: 100px;"><img src="{{ asset('img/arena.png')}}" alt="COL" class="logo2 mt-1" style="width: 15%;"> Arenas</th>
                                        <th style="width: 60px;"><img src="{{ asset('img/petlover.png')}}" alt="COL" class="logo2 mt-1" style="width: 15%;"> PetLovers</th>
                                    </tr>
                                    <tr>
                                        <td><a class="linka">Concentrado</a></td>
                                        <td><a class="linka">Galletas</a></td>
                                        <td><a class="linka">Antiparasitarios</a></td>
                                        <td><a class="linka">Arena </a></td>
                                        <td><a class="linka">Manos Libres</a></td>
                                    </tr>
                                    <tr>
                                        <td><a class="linka">Humedo</a></td>
                                        <td><a class="linka">Brownies y otros </a></td>
                                        <td><a class="linka">Suplementos </a></td>
                                        <td><a class="links">Ver más</a></td>
                                        <td><a class="linka">Adornos</a></td>
                                    </tr>
                                    <tr>
                                        <td><a class="linka">Dietas Naturales</a></td>
                                        <td><a class="linka">Tortas de Celebración</a></td>
                                        <td><a class="linka">Analgésicos </a></td>
                                    </tr>
                                    <tr>
                                        <td><a class="links">Ver más</a></td>
                                        <td><a class="linka">Huesos y Carnaza </a></td>
                                        <td><a class="linka">Antibacterianos </a></td>
                                    </tr>
                                    <tr>
                                        <td><a class="linka"></a></td>
                                        <td><a class="linka">Galletas y Snacks</a></td>
                                        <td><a class="linka">Antibióticos </a></td>
                                    </tr>
                                    <tr>
                                        <td><a class="linka"></a></td>
                                        <td><a class="links">Ver más</a></td>
                                        <td><a class="linka">Antipulgas y Garrapatas</a></td>
                                    </tr>
                                    <tr>
                                        <td><a class="linka"></a></td>
                                        <td><a class="linka"></a></td>
                                        <td><a class="linka">Articulaciones </a></td>
                                    </tr>
                                    <tr>
                                        <td><a class="links"></a></td>
                                        <td><a class="linka"></a></td>
                                        <td><a class="links">Ver más</a></td>
                                    </tr>
                                </table>
                            </div>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="">Ofertas </a></li><!--MENU OFERTAS-->
                    <li class="nav-item"><a class="nav-link" href="">Servicios </a></li><!--MENU SERVICIOS-->
                    <li class="nav-item"><a class="nav-link" href="">Blog </a></li><!--MENU BLOG-->
                </ul>
                <img src="{{ asset('img/member.png')}}" alt="COL" class="logo2 mt-1">
            </div>
        </div>
    </nav>
    <!--CONTENT-->
    @yield('content')

</body>

</html>