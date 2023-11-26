@extends('site/master')

@section('title', 'Registro de estágio')

@section('content')

    <link rel="stylesheet" href="{{ asset('css/job_register.css') }}">

    <main>

        <form action="">

            <div class="swiper">

                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">

                  <!-- Slides -->
                    <div class="swiper-slide 1">

                        <div class="initial-info">

                            <span>Passo <b>1</b> de <b>3</b></span>
                            <h1>Dados iniciais</h1>

                        </div>

                        <div class="forms-content">

                            <div class="form">

                                <h1>Qual o título da vaga?</h1>

                                <label for="">Título da vaga<b>*</b> </label>
                                <input type="text" placeholder="Ex.:  Estágio em Programação Front-End" class="input-text">

                            </div>

                            <div class="form">

                                <h1>Descrição da vaga</h1>

                                <label for="">Há algo mais que você gostaria de incluir sobre a vaga?<b>*</b> </label>
                                <textarea name="" id="" cols="30" rows="10" placeholder="Digite aqui informações adicionais sobre a vaga, se precisar." class="input-text"></textarea>

                            </div>

                        </div>

                        <div class="buttons-division">

                            <button class="next-button">Continuar</button>
        
                        </div>

                    </div>

                    <div class="swiper-slide 2">

                        <div class="initial-info">

                            <span>Passo <b>2</b> de <b>3</b></span>
                            <h1>Local e horário</h1>

                        </div>

                        <div class="forms-content">

                            <div class="form">

                                <h1>Qual a jornada do estágio?</h1>

                                <label for="">Período do estágio<b>*</b> </label>
                                <select required name="" id="" class="input-text">

                                    <option value="" disabled selected hidden></option>
                                    <option value="">Diurno</option>
                                    <option value="">Vespertino</option>
                                    <option value="">Noturno</option>

                                </select>
                                

                            </div>

                            <div class="form">

                                <h1>Local de trabalho</h1>

                                <label for="">Onde o profissional irá trabalhar?<b>*</b> </label>
                                <select required name="" id="" class="input-text">

                                    <option value="" disabled selected hidden></option>
                                    <option value="">Presencial</option>
                                    <option value="">Remoto</option>
                                    <option value="">Híbrido</option>

                                </select>

                            </div>

                            <div class="form">

                                <h1>Categoria</h1>

                                <label for="">Qual é a categoria do estágio<b>*</b> </label>
                                <input required type="text" placeholder="" class="input-text">

                            </div>


                        </div>

                        <div class="buttons-division">
                                
                            <button class="prev-button"><</button>
                            <button class="next-button">Continuar</button>

                        </div>

                    </div>

                    <div class="swiper-slide 3">

                        <div class="initial-info">

                            <span>Passo <b>3</b> de <b>3</b></span>
                            <h1>Sobre a vaga</h1>

                        </div>

                        <div class="forms-content">

                            <div class="form">

                                <div class="d-flex align-items-center "> 

                                    <h1>Qual o valor da remuneração</h1>  
                                    <input class="check" type="checkbox" name="" id="">
                                    <label class="mb-4" for="">Não mostrar</label>

                                </div>
                                
                                <label for="">Valor do bolsa-auxílio<b>*</b> </label>
                                <input class="input-text" type="number" placeholder="R$ 0,00" name="" id="">

                            </div>

                            <div class="form">

                                <div class="d-flex align-items-center "> 

                                    <input class="check" type="checkbox" name="" id="">
                                    <label class="mb-4" for="">Valor a combinar</label>

                                </div>

                            </div>


                        </div>

                        <div class="buttons-division">

                            <button class="prev-button"><</button>
                            <button type="submit" class="next-button">Finalizar</button>
        
                        </div>

                    </div>

                </div>

            </div>

        </form>

    </main>

    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/job-register_swiper.js') }}"></script>

@endsection