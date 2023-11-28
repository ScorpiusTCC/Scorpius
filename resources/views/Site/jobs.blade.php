
@extends('site/master')

@section('title', 'Vagas')

@section('content')

    <link rel="stylesheet" href="{{ asset('css/jobs-page.css') }}">

    <main>

        <div class="filter-area container ">

            <form class="d-flex" action="">

                <input class="form-control flex-grow-1" type="text" name="" id="">

            </form>

        </div>

        <div class="text-area container text-center">

            <h1 class="display-5">Vagas Disponíves</h1>

            <div class="dropdown">

                <button class="dropdown-toggle btn btn-large" data-bs-toggle="dropdown" aria-expanded="false">Mais filtros</button>
                
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">

                    <div class="filters container">

                        <form action="">

                            <div class="form-group text-center mb-3 mt-4">

                                <h2>Período de estágio:</h2>

                                <div class="d-flex flex-wrap">

                                    <div class="form-norm">

                                        <input type="checkbox" class="check-input form-check-input" id="dropdownCheck">
                                        <label class="form-check-label h3" for="dropdownCheck">Matutino</label>

                                    </div>
                                    
                                    <div>

                                        <input type="checkbox" class="check-input form-check-input" id="dropdownCheck">
                                        <label class="form-check-label h3" for="dropdownCheck">Vespertino</label>

                                    </div>

                                    <div>

                                        <input type="checkbox" class="check-input form-check-input" id="dropdownCheck">
                                        <label class="form-check-label h3" for="dropdownCheck">Noturno</label>

                                    </div>
                                
                                </div>

                            </div>

                            <div class="form-group text-center">

                                <h2>Local de trabalho:</h2>

                                <div class="d-flex flex-wrap">

                                    <div class="form-norm">

                                        <input type="checkbox" class="check-input form-check-input" id="dropdownCheck">
                                        <label class="form-check-label h3" for="dropdownCheck">Remoto</label>

                                    </div>
                                    
                                    <div>

                                        <input type="checkbox" class="check-input form-check-input" id="dropdownCheck">
                                        <label class="form-check-label h3" for="dropdownCheck">Híbrido</label>

                                    </div>

                                    <div>

                                        <input type="checkbox" class="check-input form-check-input" id="dropdownCheck">
                                        <label class="form-check-label h3" for="dropdownCheck">Presencial</label>

                                    </div>
                                
                                </div>

                            </div>

                            <div class="form-group">
                            <label for="exampleDropdownFormPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
                            </div>
                            <div class="form-check">

                            </div>
                            <button type="submit" class="btn btn-primary">Sign in</button>

                        </form>

                    </div>



                </div>
            </div>

        </div>

        <div class="jobs-area container">



        </div>

    </main>

@endsection
