<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link href="{{asset('/css/nav.css')}}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="bg-[#EAEAEA]">

   <x-header />
   <x-nav />
   <x-banner />
   <x-slider/>
   <div class="row justify-content-center">
    <div class="col-10 justify-content-center">
        <h1 class="justify-content-center">Our Events</h1>
        <div class="row">
            <!-- Post 1 -->

            @foreach ($eventos as $evento)
            <div class="col-md-4 col-12 justify-content-center mb-5">
                <div class="card m-auto" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset($evento->featured)}}" alt="{{$evento->name}}">
                    <div class="card-body">
                        <small class="card-txt-category">Categoría: Programación</small>
                        <h5 class="card-title my-2">Aprende Python en un dos tres</h5>
                        <div class="d-card-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Sed voluptatum ab cumque quisquam quod nesciunt fugiat,
                            eius corrupti nulla veniam, molestias nemo repudiandae?
                        </div>
                        <a href="#" class="post-link"><b>Leer más</b></a>
                        <hr>
                        <div class="row">
                            <div class="col-6 text-left">
                                <span class="card-txt-author">YouDevs</span>
                            </div>
                            <div class="col-6 text-right">
                                <span class="card-txt-date">Hace 2 semanas</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                
            @endforeach
   <x-footer />

 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

<script src="js/jquery.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/slider.js"></script>



</body>
</html>

