<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/4719b1c3ae.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.27/dist/sweetalert2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('admin/css/admin.css') }}">
    <title>Admin</title>
</head>
    <body>
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
                <span class="btn-logout">Sair</span>
            </div>
        </aside>

        @yield('content')

</body>
</html>