@extends('site/master')

@section('title', 'Registro de estágio')

@section('content')

    <link rel="stylesheet" href="{{ asset('css/job_register.css') }}">

    <main>

        <form action="{{ route('job.store') }}" method="post">
            @csrf
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
<<<<<<< HEAD
                                <input type="text" placeholder="Ex.:  Estágio em Programação Front-End" class="input-text">
=======
                                <input type="text" name="titulo" id="titulo" placeholder="Ex:  Estágio em Programação Front-End">
>>>>>>> 1f6280aa31ecaf08b728850c99a9d884016c2c13

                            </div>

                            <div class="form">

                                <h1>Descrição da vaga</h1>

<<<<<<< HEAD
                                <label for="">Há algo mais que você gostaria de incluir sobre a vaga?<b>*</b> </label>
                                <textarea name="" id="" cols="30" rows="10" placeholder="Digite aqui informações adicionais sobre a vaga, se precisar." class="input-text"></textarea>
=======
                                <label for="">Coloque aqui uma descrição detalhada sobre sua vaga?<b>*</b> </label>
                                <textarea name="descricao" id="descricao" cols="30" rows="10"></textarea>
>>>>>>> 1f6280aa31ecaf08b728850c99a9d884016c2c13

                            </div>

                            <div class="form">

                                <h1>Bolsa-Auxílio</h1>

                                <label for="">R$ <b>*</b> </label>
                                <input type="number" name="salario" id="salario">

                                {{-- 
                                - Adicionar check-box para a opção de não infromar valor 
                                <label for="nao_informar_valor">
                                    <input type="checkbox" name="nao_informar_valor" id="nao_informar_valor">
                                    Não informar valor
                                </label> 
                                --}}

                            </div>

                        
                        </div>

                        <div class="buttons-division">

                            <button class="next-button">Continuar</button>
        
                        </div>

                    </div>

                    <div class="swiper-slide 2">

                        <div class="initial-info">

                            <span>Passo <b>2</b> de <b>3</b></span>
<<<<<<< HEAD
                            <h1>Local e horário</h1>
=======
                            <h1>informações adcicionais</h1>
>>>>>>> 1f6280aa31ecaf08b728850c99a9d884016c2c13

                        </div>

                        <div class="forms-content">

                            <div class="form">

                                <h1>Qual a Modalidade do estágio?</h1>

<<<<<<< HEAD
                                <label for="">Período do estágio<b>*</b> </label>
                                <select required name="" id="" class="input-text">
=======
                                <label for="">Modalidade do estágio<b>*</b> </label>
                                <select name="modalidade" id="modalidade">
>>>>>>> 1f6280aa31ecaf08b728850c99a9d884016c2c13

                                    <option disabled selected hidden>Selecionar</option>

                                    @foreach ($modalidades as $modalidade)
                                            
                                    <option value="{{ $modalidade->id }}">{{ $modalidade->nome }}</option>

                                    @endforeach

                                </select>
                                
                            </div>

                            <div class="form">

                                <h1>Local de trabalho</h1>
    
                                <label for="">Onde o profissional irá trabalhar?<b>*</b> </label>
<<<<<<< HEAD
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

=======
                                <input type="text" name="cep" id="cep" maxlength="9" onkeypress="cepMascara(this)" placeholder="Informe o CEP. Ex.: 10882-875">
    
                            </div>
    
                            <div class="buttons-division">
    
                                <button class="prev-button"><</button>
                                <button class="next-button">Continuar</button>
            
                            </div>

>>>>>>> 1f6280aa31ecaf08b728850c99a9d884016c2c13
                        </div>

                    </div>

                    <div class="swiper-slide 3">

                        <div class="initial-info">

                            <span>Passo <b>3</b> de <b>3</b></span>
<<<<<<< HEAD
                            <h1>Sobre a vaga</h1>
=======
                            <h1>informações adcicionais</h1>
>>>>>>> 1f6280aa31ecaf08b728850c99a9d884016c2c13

                        </div>

                        <div class="forms-content">

                            <div class="form">

<<<<<<< HEAD
                                <div class="d-flex align-items-center "> 

                                    <h1>Qual o valor da remuneração</h1>  
                                    <input class="check" type="checkbox" name="" id="">
                                    <label class="mb-4" for="">Não mostrar</label>

                                </div>
                                
                                <label for="">Valor do bolsa-auxílio<b>*</b> </label>
                                <input class="input-text" type="number" placeholder="R$ 0,00" name="" id="">
=======
                                <h1>Em qual categoria essa vaga se encaixa?</h1>
                                <select name="categoria" id="categoria">

                                    <option value="" disabled selected hidden>Selecionar</option>
>>>>>>> 1f6280aa31ecaf08b728850c99a9d884016c2c13

                                    @foreach ($categorias as $categoria)
                                            
                                    <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>

                                    @endforeach

                                </select>
                            
                            </div>    

                            <div class="form">

<<<<<<< HEAD
                                <div class="d-flex align-items-center "> 

                                    <input class="check" type="checkbox" name="" id="">
                                    <label class="mb-4" for="">Valor a combinar</label>

                                </div>
=======
                                <h1>Qual a jornada do estágio?</h1>

                                <label for="">Período do estágio<b>*</b> </label>
                                <select name="periodo" id="periodo">
>>>>>>> 1f6280aa31ecaf08b728850c99a9d884016c2c13

                                    <option disabled selected hidden>Selecionar</option>

                                    @foreach ($periodos as $periodo)
                                            
                                    <option value="{{ $periodo->id }}">{{ $periodo->nome }}</option>

                                    @endforeach

                                </select>
                                
                            </div>
    
                            <div class="buttons-division">
    
                                <button class="prev-button"><</button>
                                <button type="submit" class="next-submit">concluir</button>
            
                            </div>

<<<<<<< HEAD

                        </div>

                        <div class="buttons-division">

                            <button class="prev-button"><</button>
                            <button type="submit" class="next-button">Finalizar</button>
        
=======
>>>>>>> 1f6280aa31ecaf08b728850c99a9d884016c2c13
                        </div>

                    </div>

                </div>

            </div>

        </form>

    </main>

    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/job-register_swiper.js') }}"></script>

@endsection