
@extends('site/master')

@section('title', 'Candidatos para vaga')

@section('content')

    <link rel="stylesheet" href="{{ asset('css/company-jobs-users.css') }}">

    <main>

        <div class="container">

            <div class="text-center">

                <h1 class="display-5">Candidatos a sua vaga</h1>

            </div>

            <div>

                <div class="card"> 

                    <div>

                        <h2>Guilhermina - Praia Grande - São Paulo</h2>
                        <span>Etec de Praia Grande</span>

                    </div>

                    <div class="text-center">

                        <img class="w-75" src="{{ asset('imgs/profile/venom.png') }}" alt="">
                        <h3>Mateus Pereira</h3>
                        <h4>Se candidatou dia 2 de setembro</h4>

                    </div>

                    <div class="d-flex justify-content-center align-items-center">

                        <a href=""><i class="fa-solid fa-circle-check" style="color: #36db14;"></i></a>

                        <a href=""><button class="btn ">Abrir perfil</button></a>

                        <a href=""><i class="fa-solid fa-circle-xmark" style="color: #b32323;"></i></a>

                    </div>

                </div>

            </div>

        </div>

    </main>

@endsection
