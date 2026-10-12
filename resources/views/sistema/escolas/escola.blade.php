@extends('sistema.template.padrao')

@section('title', 'Escolas')

@section('main-content')

 <div>
            <h2 class="h5 mb-1 section-title">
              
                <span>Lista de Escolas</span>
            </h2>

            <p class="text-muted mb-0">
                Consulte e gerencie as escolas cadastradas.
            </p>
        </div>

 <div class="heading-actions">
        <a href="{{ url('/escolas/create') }}" class="btn btn-primary btn-sm">
            <i class="bi bi-plus-circle me-1"></i>
            Nova Escola
        </a>
    </div>
<div class="container-fluid px-3 px-lg-4 py-4">


{{-- Lista de escolas --}}
<section class="panel">

    {{-- Cabeçalho da tabela --}}
    <div class="panel-header">

       

        <div class="d-flex flex-wrap gap-2">

            <input
                type="search"
                class="form-control form-control-sm table-search"
                placeholder="Pesquisar escolas..."
                id="pesquisaEscola"
            >

        </div>

    </div>


    {{-- Tabela --}}
    <div class="table-responsive">

        <table
            class="table align-middle mb-0"
            id="escolasTable"
        >

            <thead>
                <tr>

                    <th>ID</th>
                    <th>Escola</th>
                    <th>Email</th>
                    <th>NIF</th>
                    <th>Província</th>
                    <th>Morada</th>
                    <th>Telefone</th>
                    <th>Estado</th>
                    <th>Nível</th>
                    <th class="text-end">Ações</th>

                </tr>
            </thead>

            <tbody>

                 @foreach ($encontrados as $key=>$school )

                <tr>

                    {{-- ID --}}
                    <td>
                        <span class="fw-semibold">
                            {{ $school->idschool }}
                        </span>
                    </td>


                    {{-- Nome --}}
                    <td>

                        <div class="d-flex align-items-center gap-2">

                            

                            <div>

                                <p class="fw-semibold mb-0">
                                    {{ $school->nome }}
                                </p>

                                <p class="text-muted small mb-0">
                                    Escola
                                </p>

                            </div>

                        </div>

                    </td>


                    {{-- Email --}}
                    <td>
                        <span class="text-muted">
                            {{ $school->email }}
                        </span>
                    </td>


                    {{-- NIF --}}
                    <td>
                        {{ $school->nif }}
                    </td>


                    {{-- Província --}}
                    <td>
                        {{ $school->provincia }}
                    </td>


                    {{-- Morada --}}
                    <td>
                        {{ $school->morada }}
                    </td>


                    {{-- Telefone --}}
                    <td>
                        {{ $school->telefone }}
                    </td>


                    {{-- Estado --}}
                    <td>

                        @if($school->status === '')

                            <span class="badge text-bg-success">
                                Activo
                            </span>

                        @elseif($school->status === 'suspenso')

                            <span class="badge text-bg-warning">
                                Suspenso
                            </span>

                        @else

                            <span class="badge text-bg-secondary">
                                Inactivo
                            </span>

                        @endif

                    </td>


                    {{-- Nível --}}
                    <td>

                        @if($school->nivel === 'primario')

                            <span class="badge text-bg-primary">
                                Primário
                            </span>

                        @elseif($school->nivel === 'medio')

                            <span class="badge text-bg-info">
                                Médio
                            </span>

                        @elseif($school->nivel === 'superior')

                            <span class="badge text-bg-dark">
                                Superior
                            </span>

                        @else

                            <span class="badge text-bg-secondary">
                                {{ $school->nivel }}
                            </span>

                        @endif

                    </td>


                    {{-- Ações --}}
                    <td class="text-end">

                        <div class="d-flex justify-content-end gap-1">

                            {{-- Editar --}}
                            <a href="{{ url('/escolas/editar/' . $school->idschool) }}" class="btn btn-light btn-sm"
                                title="Editar"
                            >
                                <i class="bi bi-pencil"></i>
                            </a>


                            {{-- Apagar --}}
                            <form
                                action="{{ url('/escola/apagar/' . $school->idschool) }}"
                                method="POST"
                                style="display:inline;"
                            >

                                @csrf
                                @method('DELETE')

                                <button
                                    type="submit"
                                    class="btn btn-light btn-sm text-danger"
                                    title="Apagar"
                                    onclick="return confirm('Tem certeza que deseja apagar esta escola?')"
                                >
                                    <i class="bi bi-trash"></i>
                                </button>

                            </form>

                        </div>

                    </td>

                </tr>

                @endforeach

            </tbody>

        </table>

    </div>


    {{-- Rodapé --}}
   

</section

</div>

{{-- Pesquisa da tabela --}}

<script>

document.addEventListener('DOMContentLoaded', function () {

    const searchInput = document.getElementById('pesquisaEscola');
    const table = document.getElementById('escolasTable');

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
