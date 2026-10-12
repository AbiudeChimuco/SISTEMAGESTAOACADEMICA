@extends('sistema.template.padrao')

@section('title', 'Turmas')

@section('main-content')

<div class="container-fluid px-3 px-lg-4 py-4">

    {{-- Cabeçalho --}}
    <div class="d-flex flex-wrap justify-content-between align-items-center mb-4">

        <div>
            <h2 class="h5 mb-1 section-title">
                <span>Lista de Turmas</span>
            </h2>

            <p class="text-muted mb-0">
                Consulte e gerencie as suas turmas cadastradas.
            </p>
        </div>

        <div class="heading-actions">
            <a href="{{ url('/turmas/create') }}" class="btn btn-primary btn-sm">
                <i class="bi bi-plus-circle me-1"></i>
                Nova Turma
            </a>
        </div>

    </div>


    {{-- Lista de turmas --}}
    <section class="panel">

        {{-- Cabeçalho da tabela --}}
        <div class="panel-header">

            <div class="d-flex flex-wrap gap-2">

                <input
                    type="search"
                    class="form-control form-control-sm table-search"
                    placeholder="Pesquisar turma..."
                    id="pesquisaTurma"
                >

            </div>

        </div>


        {{-- Tabela --}}
        <div class="table-responsive">

            <table
                class="table align-middle mb-0"
                id="turmasTable"
            >

                <thead>
                    <tr>

                        <th>ID</th>

                        <th>Turma</th>

                        <th>Classe</th>

                        <th>Período</th>

                        <th>Ano Letivo</th>

                        <th>Escola</th>

                        <th class="text-end">
                            Ações
                        </th>

                    </tr>
                </thead>


                <tbody>

                    @forelse ($encontrados as $turma)

                        <tr>

                            {{-- ID --}}
                            <td>
                                <span class="fw-semibold">
                                    {{ $turma->id }}
                                </span>
                            </td>


                            {{-- Nome da turma --}}
                            <td>

                                <div>
                                    <p class="fw-semibold mb-0">
                                        {{ $turma->nome }}
                                    </p>

                                    <p class="text-muted small mb-0">
                                        Turma
                                    </p>
                                </div>

                            </td>


                            {{-- Classe --}}
                            <td>

                                @if($turma->classe)

                                    <span class="badge text-bg-primary">
                                        {{ $turma->classe }}
                                    </span>

                                @else

                                    <span class="text-muted">
                                        —
                                    </span>

                                @endif

                            </td>


                            {{-- Período --}}
                            <td>

                                @if($turma->periodo)

                                    <span class="badge text-bg-info">
                                        {{ $turma->periodo }}
                                    </span>

                                @else

                                    <span class="text-muted">
                                        —
                                    </span>

                                @endif

                            </td>


                            {{-- Ano letivo --}}
                            <td>
                                {{ $turma->ano_letivo ?? '—' }}
                            </td>


                            {{-- Escola --}}
                            <td>

                                @if($turma->school)

                                    <span class="fw-semibold">
                                        {{ $turma->school->nome }}
                                    </span>

                                @else

                                    <span class="text-muted">
                                        Escola não encontrada
                                    </span>

                                @endif

                            </td>


                            {{-- Ações --}}
                            <td class="text-end">

                                <div class="d-flex justify-content-end gap-1">

                                    {{-- Editar --}}
                                    <a
                                        href="{{ url('/turmas/editar/' . $turma->id) }}"
                                        class="btn btn-light btn-sm"
                                        title="Editar"
                                    >
                                        <i class="bi bi-pencil"></i>
                                    </a>


                                    {{-- Apagar --}}
                                    <form
                                        action="{{ url('/turmas/apagar/' . $turma->id) }}"
                                        method="POST"
                                        style="display:inline;"
                                    >

                                        @csrf

                                        @method('DELETE')

                                        <button
                                            type="submit"
                                            class="btn btn-light btn-sm text-danger"
                                            title="Apagar"
                                            onclick="return confirm('Tem certeza que deseja apagar esta turma?')"
                                        >
                                            <i class="bi bi-trash"></i>
                                        </button>

                                    </form>

                                </div>

                            </td>

                        </tr>

                    @empty

                        <tr>

                            <td colspan="7" class="text-center py-4">

                                <div class="text-muted">

                                    <i class="bi bi-people fs-3 d-block mb-2"></i>

                                    <p class="mb-1">
                                        Nenhuma turma cadastrada.
                                    </p>

                                    <a
                                        href="{{ url('/turmas/create') }}"
                                        class="btn btn-primary btn-sm mt-2"
                                    >
                                        <i class="bi bi-plus-circle me-1"></i>
                                        Cadastrar primeira turma
                                    </a>

                                </div>

                            </td>

                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </section>

</div>


{{-- Pesquisa da tabela --}}
<script>

document.addEventListener('DOMContentLoaded', function () {

    const searchInput = document.getElementById('pesquisaTurma');

    const table = document.getElementById('turmasTable');

    if (!searchInput || !table) {
        return;
    }

    searchInput.addEventListener('keyup', function () {

        const search = this.value.toLowerCase();

        const rows = table.querySelectorAll('tbody tr');

        rows.forEach(function (row) {

            const text = row.textContent.toLowerCase();

            row.style.display = text.includes(search) ? '' : 'none';

        });

    });

});

</script>

@endsection