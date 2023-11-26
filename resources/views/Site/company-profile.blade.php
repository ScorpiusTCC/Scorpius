@extends('site/master')

@section('title', 'Perfil Empresa')

@section('content')

    <link rel="stylesheet" href="{{ asset('css/company-profile.css') }}"/>

    <main>

        <div class="information-container container">

            <div class="profile-area p-4">

                <div class="text-image">

                    <img src="" alt="logotipo da empresa">

                    <div>

                        <p>MICROSOFT INFORMÁTICA LTDA.</p>
                        <span>Guilhermina - Praia Grande</span>

                    </div>

                </div>

                <a class="text-decoration-none" href="">

                    <div class="job-integration mt-4 p-2">

                        <h4 class="lead">Acesse o chat com a empresa clicando aqui</h4>

                    </div>

                </a>

            </div>

            <div class="info-area">

                    <h2 class="display-6">Seja bem-vindo a MICROSOFT INFORMÁTICA LTDA.</h2>

                    <div class="text-info p-3">

                        <span class="h5 text-nowrap">Tenha acesso as vagas disponiblizadas por essa empresa</span>
                        
                        <a href="{{ route('vagas') }}"><button class="btn info-btn btn-lg lead">Acessar vagas</button></a>
                        
                    </div>

            </div>


        </div>

        <div class="about-area container mt-5">

            <div>

                <h2 class=" display-5 mb-3">Sobre a empresa</h2>
                <h3 class="lead">Nós da Microsoft atuamos de diversas maneiras no Brasil, oferecendo uma ampla gama de produtos e serviços. Como por exemplo fornecendo soluções de software, como o sistema operacional Windows, pacotes de produtividade como o Office, serviços de nuvem como o Azure, além de dispositivos como Xbox. A empresa também está envolvida em iniciativas de educação, capacitação profissional e apoio a startups, buscando contribuições para a inovação tecnológica no país. Além disso, a Microsoft tem parcerias com empresas locais e órgãos governamentais para promover a transformação digital e a inclusão digital no Brasil.</h3>

            </div>

        </div>

    </main>

    <script src="{{ asset('js/register-user-script.js') }}"></script>

@endsection


{{-- MODAL --}}
 
{{-- EDITAR PERFIL --}}

<div class="modal fade edit-profile" id="" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">

        <div class="modal-body p-3">

            <form class="" action="">

                <div class="container d-flex flex-column align-items-center">

                    <h1 class="display-4 mb-5">Editar perfil da empresa</h1>
        
                    <div class="text-center">
        
                        <label class="lead fw-bold">Imagem de perfil</label>
    
                        <label class="picture" for="picture__input" tabIndex="0">
                            <span class="picture__image"></span>
                        </label>
                          
                        <input type="file" name="picture__input" id="picture__input">
        
                    </div>
    
                    <div class="mt-4 mb-4">
    
                        <label class="lead fw-bold" for="exampleTextarea">Sobre a empresa</label>
                        <textarea class="textarea-style form-control" id="" cols="70"></textarea>
    
                    </div>
    
                    <button class="btn btn-final lead btn-lg mt-5" type="submit">Confirmar alterações</button>

                </div>

            </form> 

        </div>

      </div>
    </div>
  </div>