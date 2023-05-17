
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- <title>{{ config('app.name', 'Laravel') }}</title> -->
    <title>CBT</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />    <!-- CSS only -->

    

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>

      <!-- Estilos CSS -->
    <style>       
           button{
            box-shadow: 0 0 5px rgb(0, 76, 255),
                        0 0 25px rgb(0, 76, 255);
        }
            button:hover{
                box-shadow: 0 0 5px rgb(0, 76, 255),
                            0 0 25px rgb(0, 76, 255), 
                            0 0 50px rgb(0, 76, 255),
                            0 0 100px rgb(0, 76, 255), 
                            0 0 200px rgb(0, 76, 255);                                   
        }

        .card-header {
            background-image: url('https://thumbs.dreamstime.com/b/fondo-de-textura-pared-con-efecto-m%C3%BAltiple-azul-marino-pastel-156126269.jpg');
                color: white;
                    font-weight: bold;
                        padding: 40px;
                            font-size: 36px; 
                    }
                    input{
                        background-color: black;
                        max-width: 190px;
                        height: 30px;
                        padding: 8px;
                        border: 2px solid white;
                        border-radius: 5px;
                    }
                    .input:focus{
                        color: rgb(0, 255, 255);
                        background-color: black;
                        outline-color: rgb(0, 255, 255);
                        box-shadow: 0px 0px 35px  rgb(0, 255, 255);
                        transition: 1s;
                    }
                    label{
                        background: linear-gradient(90deg,
                        #000000,
                        #747427,
                        #5c385a,
                        #051244,
                        #60024a,
                        #530000);
                        background-size: 70px;
                        font-family: "Arial", sans-serif;
                        word-spacing: 5px;
                        -webkit-text-fill-color: transparent;
                        -webkit-background-clip: text;
                        animation: animate 10s linear infinite;                    
                    }
                    @keyframes animate{
                        0%{
                            background-position: 0%;
                        }
                        100%{
                            background-position: 400%;
                        }
                    }
                    
                    .navbar-brand img {
                        width: 100px; /* Ajusta el ancho */
                        height: 100px; /* Ajusta la altura */
                        object-fit: contain; /* Ajusta la imagen dentro del contenedor sin distorsionarla */
                        object-position: center; /* Posiciona la imagen en el centro del contenedor */
                        border-radius: 50%; /* borde circular */
                    }
                    .buscador{
                        background: white;
                    }
                   


                    
    </style>
    <!-- END Estilos CSS -->

<body>

    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                
            <a class="navbar-brand" href="{{ url('/') }}">
            <img src="IMAGE/ESC.jpg" alt="Inventario">

                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registro') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

    <!-- Nabvar -->
<div class="container-fluid">
    <div class="row flex-nowrap">
    <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                <i class="fa-solid fa-bars" style="color: #ffffff;"></i><span class="fs-5 d-none d-sm-inline">Menu</span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <a href="#" class="nav-link align-middle px-0">
                        <i class="fa-solid fa-house-chimney" style="color: #ffffff;"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                        </a>
                    </li>                  
                    <li>
                        <a href="/equipments" class="nav-link px-0 align-middle">
                        <i class="fa-solid fa-computer" style="color: #ffffff;"></i> <span class="ms-1 d-none d-sm-inline">Equipos</span> </a>
                    </li>
                    <li>
                        <a href="/mouses" class="nav-link px-0 align-middle">
                        <i class="fa-solid fa-computer-mouse" style="color: #ffffff;"></i> <span class="ms-1 d-none d-sm-inline">Mouses</span> </a>
                    </li>
                    <li>
                        <a href="/keyboards" class="nav-link px-0 align-middle">
                        <i class="fa-regular fa-keyboard" style="color: #ffffff;"></i><span class="ms-1 d-none d-sm-inline">Teclados</span> </a>
                    </li>
                    <li>
                        <a href="/monitors" class="nav-link px-0 align-middle">
                        <i class="fa-solid fa-desktop" style="color: #ffffff;"></i><span class="ms-1 d-none d-sm-inline">Monitores</span> </a>
                    </li>
                    <li>
                        <a href="/ordenadores" class="nav-link px-0 align-middle">
                        <i class="fa-solid fa-mobile" style="color: #ffffff;"></i> <span class="ms-1 d-none d-sm-inline">Ordenadores</span> </a>
                    </li>

                </ul>
                <hr>
               
            </div>
        </div>
        <!-- END NABVAR -->
        <div class="col py-3">
           
            <main class="py-4">
            @yield('content')
        </main>
        </div>
    </div>
</div>
       
    </div>
    
    
</body>
</html>
