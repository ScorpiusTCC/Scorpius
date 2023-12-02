@extends('admin/master')

@section('content')

        <section class="content">
            <div class="user-begin-text">
                <h1 class="user-begin-title">Bem vindo de volta usuário!</h1>
                <span class="user-begin-span">Nessa área você poderá editar e excluir informações dos estudantes, empresas e vagas.</span>
            </div>
            <img class="img-admin" src="{{ asset('admin/img/Webinar-rafiki.png') }}" alt="">
        </section>

@endsection