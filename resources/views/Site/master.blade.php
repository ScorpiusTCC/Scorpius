<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('title') </title>
    <link rel="stylesheet" href="{{ asset('css/global_navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/global-footer.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <header>

        {{-- navbar logado --}}

        @auth

            {{-- navbar se o usuario é estudante --}}

            @if(auth()->user()->tipo === 'estudante')

                    <nav class="navbar-mobile">

                            <div class="container-fluid pt-3">

                                <div class="mnav-content">

                                    <i class="fa-solid fa-bars fa-3x" style="color: #000000;" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation"></i>
                                    <img class="w-50 float-right" src="{{ asset('imgs/logo-s-scorpius.svg') }}" alt=""> 
                                    <img class="dropdown-toggle profile-icon" data-bs-toggle="dropdown" aria-expanded="false" src="@if(isset($ajuste)){{$ajuste}}@endif{{auth()->user()->nm_img }}" alt="Foto de Perfil">
    
                                    <div class="">
                                        
                                        <ul class="dropdown-menu">
                                          <li><a class="dropdown-item" href="{{ route('student.profile') }}">Meu perfil</a></li>
                                          <li><a class="dropdown-item" href="{{ route('candidaturas.show')}}">Candidaturas</a></li>
                                          <li><a class="dropdown-item" href="{{ route('logout') }}">Sair</a></li>
                                        </ul>
        
                                    </div>

                                </div>

                                <div class="offcanvas offcanvas-start w-75" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">

                                    <div class="offcanvas-header d-flex align-items-center justify-content-center">
                                        <img class="w-100" src="{{ asset('imgs/logo-s-scorpius.svg')}}" alt="">
                                    </div>

                                    <div class="offcanvas-body">

                                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">

                                            <li class="nav-item">
                                                <a class="nav-link active hyper" aria-current="page" href="{{ route('index') }}">Home</a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link active hyper" aria-current="page" href="{{ route('index.job')}}">Vagas</a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link active hyper" aria-current="page" href="{{ route('about-us') }}">Sobre nós</a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link active" aria-current="page" href="{{ route('chat') }}">Chat</a>
                                            </li>

                                        </ul>

                                    </div>
                                </div>
                            </div>
                    </nav>   

                    <nav class="navbar-desktop">

                        <div class="w-100 d-flex align-items-center ">

                            <div class="logo-area">

                                <a href="{{ route('index')}}">

                                    <img class="logo img-fluid" src="{{ asset('imgs/logo-scorpius-lado.svg') }}" alt="">

                                </a>

                            </div>

                            <div class="hyper-area">

                                <a class="hyper" href="{{ route('index.job')}}">Vagas</a>
                                <a class="hyper" href="{{ route('about-us')}}">Sobre nós</a>
                                
                            </div>

                            <div class="user-area">

                                <a href="{{ route('chat') }}"><i class="fa-solid fa-message fa-3x" style="color: #30599E;"></i></a>

                                <img class="dropdown-toggle profile-icon" data-bs-toggle="dropdown" aria-expanded="false" src="@if(isset($ajuste)){{$ajuste}}@endif{{auth()->user()->nm_img }}" alt="Foto de Perfil">
    
                                <div class="">
                                    
                                    <ul class="dropdown-menu">
                                      <li><a class="dropdown-item" href="{{ route('student.profile') }}">Meu perfil</a></li>
                                      <li><a class="dropdown-item" href="{{ route('candidaturas.show') }}">Candidaturas</a></li>
                                      <li><a class="dropdown-item" href="{{ route('logout') }}">Sair</a></li>
                                    </ul>
    
                                </div>
                                
                            </div>

                        </div>

                    </nav>

                {{-- <nav>

                    <div class="first-navbar">

                        <div class="logo-space">

                            <a href="{{ route('index') }}">

                                <img src="{{ asset('imgs/logo-scorpius-lado.svg') }}" alt="Logo da Scorpius completa lateral">

                            </a>

                        </div>

                        <div class="hyperlink-space">

                            <a href="{{ route('index.job') }}">Vagas</a>
                            <a href="{{ route('about-us')}}">Sobre nós</a>
                            <a href="">Conheça nosso plano</a>

                        </div>

                        <div class="icons-space">
                            
                            <a href=""><img class="icons-img" src="{{ asset('imgs/chat-icon.svg') }}" alt=""></a>

                            <img class="dropdown-toggle icons-img border rounded-circle" data-bs-toggle="dropdown" aria-expanded="false" src="@if(isset($ajuste)){{$ajuste}}@endif{{auth()->user()->nm_img }}" alt="Foto de Perfil">

                            <div class="">
                                
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="{{ route('student.profile') }}">Meu perfil</a></li>
                                  <li><a class="dropdown-item" href="{{ route('candidaturas.show')}}">Candidaturas</a></li>
                                  <li><a class="dropdown-item" href="{{ route('logout') }}">Sair</a></li>
                                </ul>

                            </div>

                        </div>

                    </div>

                </nav>     --}}

            @else

                {{-- navbar se o usuario é empresa --}}

                <nav class="navbar-mobile">

                    <div class="container-fluid pt-3">

                        <div class="mnav-content">

                            <i class="fa-solid fa-bars fa-3x" style="color: #000000;" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation"></i>
                            <img class="w-50 float-right" src="{{ asset('imgs/logo-s-scorpius.svg') }}" alt="">
                            <img class="dropdown-toggle profile-icon" data-bs-toggle="dropdown" aria-expanded="false" src="@if(isset($ajuste)){{$ajuste}}@endif{{auth()->user()->nm_img }}" alt="Foto de Perfil">

                            <div class="">
                                
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ route('company.profile')}}">Meu perfil</a></li>
                                    <li><a class="dropdown-item" href="{{ route('company.jobs')}}">Minhas vagas</a></li>
                                    <li><a class="dropdown-item" href="{{ route('logout')}}">Sair</a></li>
                                </ul>

                            </div>

                        </div>

                        <div class="offcanvas offcanvas-start w-75" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">

                            <div class="offcanvas-header d-flex align-items-center justify-content-center">
                                <img class="w-100" src="{{ asset('imgs/logo-s-scorpius.svg')}}" alt="">
                            </div>

                            <div class="offcanvas-body">

                                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">

                                    <li class="nav-item">
                                        <a class="nav-link active hyper" aria-current="page" href="{{ route('index') }}">Home</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link active hyper" aria-current="page" href="{{ route('about-us') }}">Sobre nós</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="{{ route('chat') }}">Chat</a>
                                    </li>

                                    <li class="nav-item mb-3">
                                        <a class="nav-link active hyper" aria-current="page" href="#">Conheça nosso plano</a>
                                    </li>

                                </ul>

                            </div>
                        </div>
                    </div>
                </nav>   

                <nav class="navbar-desktop">

                    <div class="w-100 d-flex align-items-center ">

                        <div class="logo-area">

                            <a href="{{ route('index')}}">

                                <img class="logo img-fluid" src="{{ asset('imgs/logo-scorpius-lado.svg') }}" alt="">

                            </a>

                        </div>

                        <div class="hyper-area">


                            <a class="hyper" href="{{ route('about-us')}}">Sobre nós</a>

                            <a class="hyper" href="">Conheça nosso plano</a>

                        </div>

                        <div class="user-area">

                            <a href="{{ route('chat') }}"><i class="fa-solid fa-message fa-3x" style="color: #30599E;"></i></a>

                            <img class="dropdown-toggle profile-icon" data-bs-toggle="dropdown" aria-expanded="false" src="@if(isset($ajuste)){{$ajuste}}@endif{{auth()->user()->nm_img }}" alt="Foto de Perfil">

                            <div class="">
                                
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ route('company.profile')}}">Meu perfil</a></li>
                                    <li><a class="dropdown-item" href="{{ route('company.jobs')}}">Minhas vagas</a></li>
                                    <li><a class="dropdown-item" href="{{ route('logout')}}">Sair</a></li>
                                </ul>

                            </div>
                            
                        </div>

                    </div>

                </nav>


                {{-- <nav>

                    <div class="first-navbar">

                        <div class="logo-space">

                            <a href="{{ route('index') }}">

                                <img src="{{ asset('imgs/logo-scorpius-lado.svg') }}" alt="Logo da Scorpius completa lateral">

                            </a>

                        </div>

                        <div class="hyperlink-space">

                            {{-- <a href="{{ route('show.vagas')}}">Minhas vagas</a>
                            <a href="{{ route('about-us')}}">Sobre nós</a>
                            <a href="">Conheça nosso plano</a>

                        </div>

                        <div class="icons-space">
                            
                            <a href=""><img class="icons-img" src="{{ asset('imgs/chat-icon.svg') }}" alt=""></a>

                            <img class="dropdown-toggle icons-img border rounded-circle" data-bs-toggle="dropdown" aria-expanded="false" src="@if(isset($ajuste)){{$ajuste}}@endif{{auth()->user()->nm_img }}" alt="Foto de Perfil">

                            <div class="">
                                
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="{{ route('company.profile')}}">Meu perfil</a></li>
                                  <li><a class="dropdown-item" href="#">Minhas vagas</a></li>
                                  <li><a class="dropdown-item" href="{{ route('logout')}}">Sair</a></li>
                                </ul>

                            </div>

                        </div>

                    </div>

                </nav>    --}}
            
            @endif

        @else

            {{-- navbar sem estar logado --}}

            <nav class="navbar-mobile">

                    <div class="container-fluid pt-3">

                        <div class="mnav-content">

                            <i class="fa-solid fa-bars fa-3x" style="color: #000000;" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation"></i>
                            <img class="float-right" src="{{ asset('imgs/logo-s-scorpius.svg') }}" alt="">

                        </div>

                        <div class="offcanvas offcanvas-start w-75" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">

                            <div class="offcanvas-header d-flex align-items-center justify-content-center">
                                <img class="w-100" src="{{ asset('imgs/logo-s-scorpius.svg')}}" alt="">
                            </div>

                            <div class="offcanvas-body">

                                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">

                                    <li class="nav-item">
                                        <a class="nav-link active hyper" aria-current="page" href="{{ route('index.job')}}">Vagas</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link active hyper" aria-current="page" href="{{ route('about-us')}}">Sobre nós</a>
                                    </li>

                                    <li class="nav-item mb-3">
                                        <a class="nav-link active hyper" aria-current="page" href="#">Conheça nosso plano</a>
                                    </li>

                                    <li class="d-flex">

                                        <a href="{{ route('register')}}" class="register-btn text-decoration-none">
                                            <button class="btn">Cadastro</button>
                                        </a>
                                    
                                        <a href="{{ route('login')}}" class="login-btn text-decoration-none">
                                            <button class="btn">Login</button>
                                        </a>

                                    </li>

                                </ul>

                            </div>
                        </div>
                    </div>
            </nav>   

            <nav class="navbar-desktop">
    
                <div class="w-100 d-flex align-items-center ">

                    <div class="logo-area">
    
                        <a href="{{ route('index')}}">
    
                            <img class="logo img-fluid" src="{{ asset('imgs/logo-scorpius-lado.svg') }}" alt="">
    
                        </a>
    
                    </div>
    
                    <div class="hyper-area">
    
                        <a class="hyper" href="{{ route('index.job')}}">Vagas</a>
                        <a class="hyper" href="{{ route('about-us')}}">Sobre nós</a>
                        <a class="hyper" href="">Conheça nosso plano</a>
    
                    </div>
    
                    <div class="user-area">
    
                        <a href="{{ route('register')}}" class="register-btn text-decoration-none">
                            <button class="btn btn-lg ">Cadastro</button>
                        </a>
                    
                        <a href="{{ route('login')}}" class="login-btn text-decoration-none">
                            <button class="btn btn-lg">Login</button>
                        </a>
                        
                    </div>

                </div>

            </nav>

        @endauth

    </header>

    @yield('content')

    <footer>

        <link rel="stylesheet" href="{{ asset('css/global_footer.css') }}">

        <div class="first-division-footer">

            <div class="hyperlinks-area">

                <img src="{{ asset('imgs/logo-scorpius-lado.svg') }}" alt="Logo da Scorpius de lado">

                <p>
                    
                    <a href="{{ route('index') }}">Home</a> | 
                    <a href="{{ route('register') }}">Cadastro</a> | 
                    <a href="{{ route('about-us') }}">Quem Somos</a> | 
                    <a href="">Fale Conosco</a>
            
                </p>

            </div>

            <div class="information-area">

                <div class="info-content">

                    <img src="{{ asset('imgs/footer/location-icon.svg') }}" alt="icone com uma imagem de GPS">

                    <div class="content-text">

                        <p>11705-320 Av. Dr. Roberto de Almeida Vinhas</p>
                        <p>Balneário Maracanã, Praia Grande</p>

                    </div>
                    
                </div>

                <div class="info-content">

                    <img src="{{ asset('imgs/footer/number-icon.svg') }}" alt="Icone com uma ilustração de telefone">

                    <div class="content-text">

                        <p>(13) 99130-3424</p>
           
                    </div>

                </div>

                <div class="info-content">

                    <img src="{{ asset('imgs/footer/email-icon.svg') }}" alt="Icone com uma ilustração de carta">

                    <div class="content-text">

                        <p>scorpiusorganization@gmail.com</p>

                    </div>

                </div>

            </div>

            <div class="social-area">

                <h2>Sobre nós</h2>

                <h3>Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet</h3>

                <a href="https://www.instagram.com/scorpius_enterprises/" target="_blank"><img src="{{ asset('imgs/footer/instagram-icon.svg') }}" alt="icone de uma camera da rede social Instagram"></a>

            </div>
        
        </div>

        <div class="second-division-footer">

            <h4>Scorpius Enterprises © 2023 - Todos os direitos reservados.</h4>

        </div>
        
    </footer>

    <script src="{{ asset('js/inputs-mask.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/fba211da55.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>
