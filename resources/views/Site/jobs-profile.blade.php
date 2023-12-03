
@extends('site/master')

@section('title', 'Perfil vaga')

@section('content')

    <link rel="stylesheet" href="{{ asset('css/jobs_profile.css') }}">

    <main>

        <div class="container">

            <div class="profile-info mb-5">

                <img class="img-fluid" src="{{ asset('imgs/profile/venom.png') }}" alt="">

                <div class="text-space">

                    <h3>Estágio em Tecnologia da Informação</h3>
                    <h4>MICROSOFT INFORMÁTICA LTDA.</h4>
                    <h5>Guilhermina - Praia Grande - São Paulo</h5>
                    <h6>Hibrido (Vespertino)</h6>
                    <span>Tecnologia</span>

                </div>

                <div>

                    <div class="d-flex align-items-center">
                        
                        <a href="">

                            <button class="btn main-btn m-2">Candidatar-se</button>

                        </a>

                    </div>

                </div>

            </div>

            <div class="profile-about p-4 mb-3">

                <h3 class="leads mb-3">Descrição da vaga</h3>

                <h5>Em busca de um entusiasta da tecnologia para auxiliar no desenvolvimento de software, participar de projetos inovadores e aprender com uma equipe dinâmica. O estagiário terá a oportunidade de aplicar seus conhecimentos em programação, colaborar em soluções criativas e adquirir experiência prática em diferentes áreas de desenvolvimento tecnológico.</h5>

            </div>

            <div class="profile-date">

                <div class="salary">

                    <h5 class="lead">R$ 2.000,00 (Bruto mensal)</h5>

                </div>

                <div class="date">

                    <h5 class="lead">Publicada em 1 de setembro</h5>

                </div>

            </div>

        </div>

    </main>

@endsection
