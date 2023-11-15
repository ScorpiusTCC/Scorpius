@extends('site/master')

@section('title', 'Perfil Empresa')

@section('content')

    <link rel="stylesheet" href="{{ asset('css/job-register.css') }}">

    <main>

        <form action="">

            <div class="swiper">

                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">

                  <!-- Slides -->
                    <div class="swiper-slide 1">

                        <div class="initial-info">

                            <span>Passo <b>1</b> de <b>4</b></span>
                            <h1>Dados iniciais</h1>

                        </div>

                        <div class="forms-content">

                            <div class="form">

                                <h1>Qual o título da vaga?</h1>

                                <label for="">Título da vaga<b>*</b> </label>
                                <input type="text" placeholder="Ex.:  Estágio em Programação Front-End">

                            </div>

                            <div class="form">

                                <h1>Descrição da vaga</h1>

                                <label for="">Há algo mais que você gostaria de incluir sobre a vaga?<b>*</b> </label>
                                <textarea name="" id="" cols="30" rows="10" placeholder="Digite aqui informações adicionais sobre a vaga, se precisar."></textarea>

                            </div>

                        </div>

                        <div class="buttons-division">

                            <button class="next-button">Continuar</button>
        
                        </div>

                    </div>

                    <div class="swiper-slide 2">

                        <div class="initial-info">

                            <span>Passo <b>2</b> de <b>4</b></span>
                            <h1>Local e horário</h1>

                        </div>

                        <div class="forms-content">

                            <div class="form">

                                <h1>Qual a jornada do estágio?</h1>

                                <label for="">Período do estágio<b>*</b> </label>
                                <select name="" id="">

                                    <option value="" disabled selected hidden></option>
                                    <option value="">Diurno</option>
                                    <option value="">Vespertino</option>
                                    <option value="">Noturno</option>

                                </select>
                                

                            </div>

                            <div class="form">

                                <h1>Local de trabalho</h1>

                                <label for="">Onde o profissional irá trabalhar?<b>*</b> </label>
                                <input type="text" maxlength="9" onkeypress="cepMascara(this)" placeholder="Informe o CEP. Ex.: 10882-875">

                            </div>

                            <div class="form">

                                <h1>Número de vagas</h1>

                                <label for="">N° de vagas<b>*</b> </label>
                                <input type="number" placeholder="1">

                            </div>


                        </div>

                        <div class="buttons-division">

                            <button class="prev-button"><</button>
                            <button class="next-button">Continuar</button>
        
                        </div>

                    </div>

                    <div class="swiper-slide 3">

                        <div class="initial-info">

                            <span>Passo <b>3</b> de <b>4</b></span>
                            <h1>Sobre a vaga</h1>

                        </div>

                        <div class="forms-content">

                            <div class="form">

                                <h1>Informações sobre a vaga</h1>

                                <label for="">Quais são as atividades desempenhadas nesta função?<b>*</b> </label>
                                <textarea name="" id="" cols="30" rows="10" placeholder="Digite aqui os papéis e responsabilidades exercidas nesse cargo."></textarea>

                            </div>

                            <div class="form">

                                <h1></h1>

                                <label for="">Há algo mais que você gostaria de incluir sobre a vaga?<b>*</b> </label>
                                <textarea name="" id="" cols="30" rows="10" placeholder="Informe quais cursos o candidato deverá estar cursando e quais os conhecimentos necessários."></textarea>

                            </div>


                        </div>

                        <div class="buttons-division">

                            <button class="prev-button"><</button>
                            <button class="next-button">Continuar</button>
        
                        </div>

                    </div>

                </div>

            </div>

        </form>

    </main>

    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/job-register_swiper.js') }}"></script>


@endsection