@extends('site/master')

@section('title', 'Vagas')
    
@section('content')

    <link rel="stylesheet" href="{{ asset('css/jobs-page.css') }}">

    <main>

        <div id="text-span">

            <span>Vagas Disponíves</span>

        </div>

        <div id="jobs-division">

            @foreach ($vagas as $vaga)

                <div class="job-card">

                    <div id="text-area-card">

                        <h2>{{ $vaga->titulo }}</h2>
                        <h3>{{ $vaga->empresa }}</h3>
                        <h4>{{ $vaga->modalidade }}</h4>

                    </div>

                    <div id="image-area-card">

                        <img src="" alt="Logotipo da empresa">

                    </div>

                    <div id="interaction-area-card">

                        <h2>R$ {{ str_replace('.', ',', $vaga->salario) }}  (Bruto mensal)</h2>
                        
                        <div>

                            <h4>Publicada em {{ (new DateTime($vaga->created_at))->format('d/m/Y') }}</h4>
                            <button>Cadastrar-se</button>

                        </div>

                    </div>

                </div>

            @endforeach

        </div>

    </main>
@endsection
