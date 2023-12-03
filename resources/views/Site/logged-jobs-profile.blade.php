
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

                    <a href="{{ route('company-jobs-users') }}"><button class="btn main-btn">Ver candidatos</button></a>
                    
                    <div class="d-flex align-items-center">
                        
                        <i class="fa-solid fa-trash-can" style="color: #30599E;" data-bs-toggle="modal" data-bs-target=".exampleModalExit"></i>
                        <a href="{{ route('edit-jobs') }}"><button class="btn main-btn m-2">Editar vaga</button></a>

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

        <div class="modal fade exampleModalExit" id="" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

            <div class="modal-dialog modal-dialog-centered modal-lg">

                <div class="modal-content p-4">

                    <div class="modal-body text-center">

                        <h2 class="display-6">Tem certeza que deseja excluir essa vaga?</h2>

                        <div class="mt-5">

                            <a class="" href=""><button class="btn btn-lg btn-success">Sim</button></a>

                            <button class="btn btn-lg btn-danger m-4" data-bs-dismiss="modal">Não</button>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </main>

@endsection
