@extends('site/master')

@section('title', 'Registro de estágio')

@section('content')

    <link rel="stylesheet" href="{{ asset('css/jobs-registe.css') }}">

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

                        <div class="forms-content container">

                            <div class="form">

                                <h1>Qual o título da vaga?</h1>

                                <label for="">Título da vaga<b>*</b> </label>
                                <input class="input-text form-control" type="text" name="titulo" id="titulo" value="Estágio de Back-end" placeholder="Ex:  Estágio em Programação Front-End">

                            </div>

                            <div class="form">

                                <h1>Descrição da vaga</h1>

                                <label for="">Coloque aqui uma descrição detalhada sobre sua vaga?<b>*</b> </label>
                                <textarea class="form-control" name="descricao" id="descricao" cols="30" rows="10">Qual o tamanho dos seus objetivos? Deseja novos desafios? Então, vem para TQI! Você fará parte de times diversos e de alta performance, em um ambiente descontraído, dinâmico e colaborativo. Para nós, a voz e contribuição de todos é fundamental para a construção das nossas soluções e para nossas tomadas de decisões. Aqui, as pessoas são o diferencial. Somos apaixonados por tecnologia, inovação e evolução constante. Você precisa saber:
                                    Superior em Ciência da Computação, Engenharias, Sistemas da Informação ou áreas
                                    correlatas; Linguagem de programação Python FastApi ou Flask; Experiência com
                                    metodologias ágeis Scrum e Kanban; Azure DevOps; Conhecimento em arquitetura de
                                    sistemas back-end; Testes unitários; Cloud AWS; Banco de dados relacional;
                                    Experiência com GIT; Padrões de Projetos e Microserviços Apis REST; Especificações
                                    Openid Connect e OAuth 2.0; Identity and Access Management (IAM); Access Control</textarea>

                            </div>

                            <div class="form">

                                <h1>Bolsa-Auxílio</h1>

                                <label for="">R$ <b>*</b> </label>
                                <input class="input-text form-control" type="number" name="salario" id="salario" value="1900">

                                <div class="d-flex align-items-center "> 

                                    <input class="check" type="checkbox" name="" id="">
                                    <label class="mb-4" for="">Valor a combinar</label>

                                </div>

                            </div>
                        
                        </div>

                        <div class="buttons-division container">

                            <button class="next-button">Continuar</button>
        
                        </div>

                    </div>

                    <div class="swiper-slide 2">

                        <div class="initial-info">

                            <span>Passo <b>2</b> de <b>3</b></span>
                            <h1>Informações adicicionais</h1>

                        </div>

                        <div class="forms-content container">

                            <div class="form">

                                <h1>Qual a Modalidade do estágio?</h1>

                                <label for="">Modalidade do estágio<b>*</b> </label>
                                <select name="modalidade" id="modalidade">

                                    <option disabled selected hidden>Selecionar</option>

                                    @foreach ($modalidades as $modalidade)
                                            
                                        <option value="{{ $modalidade->id }}" selected>{{ $modalidade->nome }}</option>

                                    @endforeach

                                </select>
                                
                            </div>

                            <div class="form">

                                <h1>Em qual categoria essa vaga se encaixa?</h1>
                                <select name="categoria" id="categoria">

                                    <option value="" disabled selected hidden>Selecionar</option>

                                    @foreach ($categorias as $categoria)
                                            
                                        <option value="{{ $categoria->id }}" selected>{{ $categoria->nome }}</option>

                                    @endforeach

                                </select>
                            
                            </div>    

                            <div class="form">

                                <h1>Qual a jornada deste estágio?</h1>

                                <select name="periodo" id="periodo">

                                    <option disabled selected hidden>Selecionar</option>

                                    @foreach ($periodos as $periodo)
                                            
                                        <option value="{{ $periodo->id }}" selected>{{ $periodo->nome }}</option>

                                    @endforeach

                                </select>
                                
                            </div>
    
                            <div class="buttons-division">
    
                                <button class="prev-button"><</button>
                                <button class="next-button">Continuar</button>
            
                            </div>

                        </div>

                    </div>

                    <div class="swiper-slide 3">

                        <div class="initial-info">

                            <span>Passo <b>3</b> de <b>3</b></span>
                            <h1>Sobre a vaga</h1>

                        </div>

                        <div class="forms-content container">

                            <div class="form">

                                <h1>Local de trabalho</h1>
    
                                <label for="">Onde o profissional irá trabalhar?<b>*</b> </label>
                                <input class="input-text form-control" type="text" name="cep" id="cep" maxlength="9" value="11714000" onkeypress="cepMascara(this)" placeholder="Informe o CEP. Ex.: 10882-875" onblur="pesquisacep(this.value)">
    
                            </div>  

                            <div class="form">

                                <label for="">Bairro<b>*</b> </label>
                                <input class="input-text form-control" name="bairro" type="text" id="bairro" size="40">
    
                            </div>  

                            <div class="form">
    
                                <label for="">Cidade<b>*</b> </label>
                                <input class="input-text form-control" name="cidade" type="text" id="cidade" size="40">
    
                            </div>  

                            <div class="form">
    
                                <label for="">Estado<b>*</b> </label>
                                <input class="input-text form-control" name="uf" type="text" id="uf" size="40">
    
                            </div>  
    
                        </div>

                        <div class="buttons-division container">

                            <button class="prev-button"><</button>
                            <button type="submit" class="submit-button">Finalizar</button>
        
                        </div>

                    </div>

                </div>

            </div>

        </form>

    </main>

    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/job-register_swiper.js') }}"></script>
    <script src="{{ asset('js/vagas-script.js') }}"></script>

@endsection