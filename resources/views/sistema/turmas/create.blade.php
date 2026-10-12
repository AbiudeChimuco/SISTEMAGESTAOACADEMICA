
@extends('sistema.template.padrao')

@section('title', 'Turmas')

@section('main-content')

<div class="container-fluid px-3 px-lg-4 py-4">

    {{-- Cabeçalho da página --}}
    <div class="page-heading d-flex flex-column flex-md-row align-items-md-center justify-content-between gap-3 mb-4">

        <div class="page-heading-copy">

            <div class="d-flex align-items-center gap-3">

                <div>
                    <h1 class="h3 mb-1">Cadastro de Turmas</h1>

                    <p class="text-muted mb-0">
                        Gerencie as turmas cadastradas no sistema.
                    </p>
                </div>

            </div>

        </div>

    </div>


    {{-- Formulário de cadastro --}}
    <section class="panel mb-4" id="formulario-turma">

        <div class="panel-header">

            <div>

                <h2 class="h5 mb-1 section-title">

                    <i class="bi bi-people-fill"></i>

                    <span>Cadastro de Turma</span>

                </h2>

                <p class="text-muted mb-0">
                    Preencha os dados para cadastrar uma nova turma.
                </p>

            </div>

        </div>


        <div class="panel-body p-4">

            <form method="POST" action="{{ url('/salvar') }}">

                @csrf

                <div class="row g-3">


                    {{-- Escola --}}
                    <div class="col-12">

                        <label for="idschool" class="form-label">
                            Escola
                        </label>

                        <select
                            name="idschool"
                            id="idschool"
                            class="form-select"
                            required
                        >

                            <option value="">
                                Selecione a escola
                            </option>

                            @foreach($schools as $school)

                                <option value="{{ $school->idschool }}">

                                    {{ $school->nome }}

                                </option>

                            @endforeach

                        </select>

                    </div>


                    {{-- Nome da Turma --}}
                    <div class="col-12 col-md-6">

                        <label for="nome" class="form-label">
                            Nome da Turma
                        </label>

                        <input
                            type="text"
                            name="nome"
                            id="nome"
                            class="form-control"
                            placeholder="Ex: Turma A"
                            value="{{ old('nome') }}"
                            required
                        >

                    </div>


                    {{-- Classe --}}
                    <div class="col-12 col-md-6">

                        <label for="classe" class="form-label">
                            Classe
                        </label>

                        <select
                            name="classe"
                            id="classe"
                            class="form-select"
                            required
                        >

                            <option value="">
                                Selecione a classe
                            </option>

                            <option value="1ª Classe">1ª Classe</option>
                            <option value="2ª Classe">2ª Classe</option>
                            <option value="3ª Classe">3ª Classe</option>
                            <option value="4ª Classe">4ª Classe</option>
                            <option value="5ª Classe">5ª Classe</option>
                            <option value="6ª Classe">6ª Classe</option>
                            <option value="7ª Classe">7ª Classe</option>
                            <option value="8ª Classe">8ª Classe</option>
                            <option value="9ª Classe">9ª Classe</option>
                            <option value="10ª Classe">10ª Classe</option>
                            <option value="11ª Classe">11ª Classe</option>
                            <option value="12ª Classe">12ª Classe</option>
                            <option value="13ª Classe">13ª Classe</option>

                        </select>

                    </div>


                    {{-- Período --}}
                    <div class="col-12 col-md-6">

                        <label for="periodo" class="form-label">
                            Período
                        </label>

                        <select
                            name="periodo"
                            id="periodo"
                            class="form-select"
                            required
                        >

                            <option value="">
                                Selecione o período
                            </option>

                            <option value="Manhã">
                                Manhã
                            </option>

                            <option value="Tarde">
                                Tarde
                            </option>

                            <option value="Noite">
                                Noite
                            </option>

                        </select>

                    </div>


                    {{-- Ano Lectivo --}}
                    <div class="col-12 col-md-6">

                        <label for="ano_letivo" class="form-label">
                            Ano Lectivo
                        </label>

                        <input
                            type="text"
                            name="ano_letivo"
                            id="ano_letivo"
                            class="form-control"
                            placeholder="Ex: 2026/2027"
                            value="{{ old('ano_letivo') }}"
                            required
                        >

                    </div>


                    {{-- Botão --}}
                    <div class="col-12 mt-3">

                        <button
                            type="submit"
                            class="btn btn-primary"
                        >

                            <i class="bi bi-check-circle me-1"></i>

                            Cadastrar Turma

                        </button>

                    </div>

                </div>

            </form>

        </div>

    </section>

</div>

@endsection

