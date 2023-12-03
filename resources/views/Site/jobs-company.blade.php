
@extends('site/master')

@section('title', 'Vagas')

@section('content')

    <link rel="stylesheet" href="{{ asset('css/jobs.css') }}">

    <main>

        <div class="filter-area container mb-4 ">

            <form class="d-flex" action="">

                <input class="search form-control flex-grow-1" placeholder="Buscar vaga" type="text" name="" id="">

                <div class="dropdown">

                    <button class="dropdown-toggle btn btn-large" data-bs-toggle="dropdown" aria-expanded="false">Mais filtros</button>
                    
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    
                        <div class="filters container d-flex flex-column justify-content-center align-items-center">
    
                            <div class="form-group text-center mb-3 mt-4">
    
                                <h3>Período de estágio:</h3>

                                <div class="d-flex flex-wrap">

                                    <div class="d-flex mb-2">

                                        <input type="checkbox" class="check-input form-check-input" id="dropdownCheck">
                                        <label class="form-check-label lead filter-label" for="dropdownCheck">Matutino</label>

                                        <input type="checkbox" class="check-input form-check-input" id="dropdownCheck">
                                        <label class="form-check-label lead filter-label" for="dropdownCheck">Vespertino</label>

                                    </div>
                                    

                                    <div>

                                        <input type="checkbox" class="check-input form-check-input" id="dropdownCheck">
                                        <label class="form-check-label lead filter-label" for="dropdownCheck">Noturno</label>

                                    </div>
                                
                                </div>

                            </div>

                            <div class="form-group text-center mb-3 mt-4">
    
                                <h3>Período de estágio:</h3>

                                <div class="d-flex flex-wrap">

                                    <div class="d-flex mb-2">

                                        <input type="checkbox" class="check-input form-check-input" id="dropdownCheck">
                                        <label class="form-check-label lead filter-label" for="dropdownCheck">Remoto</label>

                                        <input type="checkbox" class="check-input form-check-input" id="dropdownCheck">
                                        <label class="form-check-label lead filter-label" for="dropdownCheck">Híbrido</label>

                                    </div>
                                    

                                    <div>

                                        <input type="checkbox" class="check-input form-check-input" id="dropdownCheck">
                                        <label class="form-check-label lead filter-label" for="dropdownCheck">Presencial</label>

                                    </div>
                                
                                </div>

                            </div>
                            
                            <div class="form-group mb-3">
                                <h4>Categoria do estágio:</h4>
                                <input type="text" class="form-control" id="">
                            </div>
                    
                            <div class="form-group text-center mb-3">
                                <h4>Valor aproximado:</h4>

                                <div class="mb-3">

                                    <label class="form-check-label lead filter-label" for="dropdownCheck">Valor mínimo:</label>
                                    <input type="number" class="form-control" id="">

                                </div>

                                <div>

                                    <label class="form-check-label lead filter-label" for="dropdownCheck">Valor máximo:</label>
                                    <input type="number" class="form-control" id="">

                                </div>

                            </div>
 
                            <button type="submit" class="filter-btn btn btn-lg">Confirmar filtro</button>
    
                        </div>
    
                    </div>
                </div>

            </form>

        </div>

        <div class="text-area container">

            <div class="text-center">

                <h1 class="display-5">Vagas que sua empresa disponibilizou  </h1>

            </div>

            <div class="card-area d-flex">

                <div class="card container">

                    <div class="info-space mb-4">

                        <h4>Estágio em Tecnologia da Informação</h4>
                        <h5>R$ 2.200,00 (Bruto mensal)</h5>
                        <h6>Presencial (Matutino)</h6>

                    </div>

                    <div class="btn-space d-flex justify-content-around align-items-center">

                        <img class="w-25 img-fluid" src="{{ asset('imgs/profile/venom.png')}}" alt="">

                        <div>

                            <h4>ITAÚ UNIBANCO S.A.</h4>
                            <h5>Aviação</h5>
                            <h6>Publicada em 1 de setembro</h6>

                        </div>

                        <a href=""><button class="btn-card btn">Visualizar</button></a>

                    </div>


                </div>

                <div class="card container">

                    <div class="info-space mb-4">

                        <h4>Estágio em Tecnologia da Informação</h4>
                        <h5>R$ 2.200,00 (Bruto mensal)</h5>
                        <h6>Presencial (Matutino)</h6>

                    </div>

                    <div class="btn-space d-flex justify-content-around align-items-center">

                        <img class="w-25 img-fluid" src="{{ asset('imgs/profile/venom.png')}}" alt="">

                        <div>

                            <h4>ITAÚ UNIBANCO S.A.</h4>
                            <h5>Aviação</h5>
                            <h6>Publicada em 1 de setembro</h6>

                        </div>

                        <a href=""><button class="btn-card btn">Visualizar</button></a>

                    </div>


                </div>

                <div class="card container">

                    <div class="info-space mb-4">

                        <h4>Estágio em Tecnologia da Informação</h4>
                        <h5>R$ 2.200,00 (Bruto mensal)</h5>
                        <h6>Presencial (Matutino)</h6>

                    </div>

                    <div class="btn-space d-flex justify-content-around align-items-center">

                        <img class="w-25 img-fluid" src="{{ asset('imgs/profile/venom.png')}}" alt="">

                        <div>

                            <h4>ITAÚ UNIBANCO S.A.</h4>
                            <h5>Aviação</h5>
                            <h6>Publicada em 1 de setembro</h6>

                        </div>

                        <a href=""><button class="btn-card btn">Visualizar</button></a>

                    </div>


                </div>

                <div class="card container">

                    <div class="info-space mb-4">

                        <h4>Estágio em Tecnologia da Informação</h4>
                        <h5>R$ 2.200,00 (Bruto mensal)</h5>
                        <h6>Presencial (Matutino)</h6>

                    </div>

                    <div class="btn-space d-flex justify-content-around align-items-center">

                        <img class="w-25 img-fluid" src="{{ asset('imgs/profile/venom.png')}}" alt="">

                        <div>

                            <h4>ITAÚ UNIBANCO S.A.</h4>
                            <h5>Aviação</h5>
                            <h6>Publicada em 1 de setembro</h6>

                        </div>

                        <a href=""><button class="btn-card btn">Visualizar</button></a>

                    </div>


                </div>



            </div>



        </div>

        <div class="jobs-area container">



        </div>

    </main>

@endsection
