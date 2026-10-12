
@extends('sistema.template.padrao')

@section('title', 'Turmas')

@section('main-content')

<div class="container-fluid px-3 px-lg-4 py-4">

    {{-- Cabeçalho da página --}}
    <div class="page-heading d-flex flex-column flex-md-row align-items-md-center justify-content-between gap-3 mb-4">

        <div class="page-heading-copy">

            <div class="d-flex align-items-center gap-3">

                <div>

                    <h1 class="h3 mb-1">Editar Turma</h1>

                    <p class="text-muted mb-0">
                        Edite os dados da turma cadastrada no sistema.
                    </p>

                </div>

            </div>

        </div>

    </div>


    {{-- Formulário de edição --}}
    <section class="panel mb-4" id="formulario-turma">

        <div class="panel-header">

            <div>

                <h2 class="h5 mb-1 section-title">

                    <i class="bi bi-people-fill"></i>

                    <span>Editar Turma</span>

                </h2>

                <p class="text-muted mb-0">
                    Altere os dados da turma abaixo.
                </p>

            </div>

        </div>


        <div class="panel-body p-4">

            <form method="POST" action="/actualizar/{{ $turma->id }}">

                @csrf

                @method('POST')

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

                                <option
                                    value="{{ $school->idschool }}"
                                    {{ $turma->idschool == $school->idschool ? 'selected' : '' }}
                                >
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
                            value="{{ $turma->nome }}"
                            class="form-control"
                            placeholder="Digite o nome da turma"
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

                            <option value="1ª Classe"
                                {{ $turma->classe == '1ª Classe' ? 'selected' : '' }}>
                                1ª Classe
                            </option>

                            <option value="2ª Classe"
                                {{ $turma->classe == '2ª Classe' ? 'selected' : '' }}>
                                2ª Classe
                            </option>

                            <option value="3ª Classe"
                                {{ $turma->classe == '3ª Classe' ? 'selected' : '' }}>
                                3ª Classe
                            </option>

                            <option value="4ª Classe"
                                {{ $turma->classe == '4ª Classe' ? 'selected' : '' }}>
                                4ª Classe
                            </option>

                            <option value="5ª Classe"
                                {{ $turma->classe == '5ª Classe' ? 'selected' : '' }}>
                                5ª Classe
                            </option>

                            <option value="6ª Classe"
                                {{ $turma->classe == '6ª Classe' ? 'selected' : '' }}>
                                6ª Classe
                            </option>

                            <option value="7ª Classe"
                                {{ $turma->classe == '7ª Classe' ? 'selected' : '' }}>
                                7ª Classe
                            </option>

                            <option value="8ª Classe"
                                {{ $turma->classe == '8ª Classe' ? 'selected' : '' }}>
                                8ª Classe
                            </option>

                            <option value="9ª Classe"
                                {{ $turma->classe == '9ª Classe' ? 'selected' : '' }}>
                                9ª Classe
                            </option>

                            <option value="10ª Classe"
                                {{ $turma->classe == '10ª Classe' ? 'selected' : '' }}>
                                10ª Classe
                            </option>

                            <option value="11ª Classe"
                                {{ $turma->classe == '11ª Classe' ? 'selected' : '' }}>
                                11ª Classe
                            </option>

                            <option value="12ª Classe"
                                {{ $turma->classe == '12ª Classe' ? 'selected' : '' }}>
                                12ª Classe
                            </option>

                            <option value="13ª Classe"
                                {{ $turma->classe == '13ª Classe' ? 'selected' : '' }}>
                                13ª Classe
                            </option>

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

                            <option value="Manhã"
                                {{ $turma->periodo == 'Manhã' ? 'selected' : '' }}>
                                Manhã
                            </option>

                            <option value="Tarde"
                                {{ $turma->periodo == 'Tarde' ? 'selected' : '' }}>
                                Tarde
                            </option>

                            <option value="Noite"
                                {{ $turma->periodo == 'Noite' ? 'selected' : '' }}>
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
                            value="{{ $turma->ano_letivo }}"
                            class="form-control"
                            placeholder="Ex: 2026/2027"
                            required
                        >

                    </div>


                    {{-- Botão --}}
                    <div class="col-12 mt-3">

                        <button
                            type="submit"
                            class="btn btn-warning"
                        >

                            <i class="bi bi-check-circle me-1"></i>

                            Actualizar Turma

                        </button>

                    </div>

                </div>

            </form>

        </div>

    </section>

</div>

@endsection
