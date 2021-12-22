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
    <div class="info d-flex justify-content-between align-items-center d-none d-sm-none d-md-block">
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


    @yield('content')
</body>

</html>