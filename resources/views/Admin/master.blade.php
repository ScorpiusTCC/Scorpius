<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/4719b1c3ae.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.27/dist/sweetalert2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('admin/css/adms.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Admin</title>
</head>

    <body>

        <header>

            <nav class="navbar">
                <div class="logo-block">
                    <a class="logo-block-title" href="{{ route('admin.index') }}">
                        <img class="logo" src="{{ asset('admin/img/logo-scorpius-lado.svg') }}" alt="Logo da Scorpius">
                    </a>
                </div>
                <div class="user-block">
                    <span class="user-block-span">Bem-vindo, Administrador</span>
                    <div class="perfil">
                        <img class="foto-perfil" src="{{ asset('admin/img/venom.png') }}" alt="Foto de perfil admin">
                    </div>
                </div>
            </nav>

        </header>

        <main class="w-100 d-flex">

            <aside class="sidebar" >
                <div class="sidebar-link-block">
                    <div class="list-style">
                        <i class="fa-solid fa-house icon"></i>
                        <a class="link-style" href="{{ route('admin.index') }}">Home</a>
                    </div>
                    <div class="list-style">
                        <i class="fa-solid fa-user icon"></i>
                        <a class="link-style" href="{{ route('admin.students') }}">Estudantes</a>
                    </div>
                    <div class="list-style">
                        <i class="fa-solid fa-building icon"></i>
                        <a class="link-style" href="{{ route('admin.companys') }}">Empresas</a>
                    </div>
                    <div class="list-style">
                        <i class="fa-regular fa-newspaper icon"></i>
                        <a class="link-style" href="{{ route('admin.jobs') }}">Vagas</a>
                    </div>
                </div>
                <div class="btn-logout-block">
                    <button class="btn-logout btn btn-lg" data-bs-toggle="modal" data-bs-target=".exampleModalExit">Sair</button>
                </div>
            </aside>

            @yield('content')
            

            <div class="modal fade exampleModalExit" id="" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

                <div class="modal-dialog modal-dialog-centered modal-lg">

                    <div class="modal-content p-4">

                        <div class="modal-body text-center">

                            <h2 class="display-6">Tem certeza que deseja sair?</h2>

                            <div class="mt-5">

                                <a class="" href="{{ route('logout')}}"><button class="btn btn-lg btn-success">Sim</button></a>

                                <button class="btn btn-lg btn-danger m-4" data-bs-dismiss="modal">Não</button>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </main>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>