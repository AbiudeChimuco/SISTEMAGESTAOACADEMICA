@extends('sistema.template.padrao')

@section('title', 'Escolas')

@section('main-content')

<div class="container-fluid px-3 px-lg-4 py-4">

{{-- Cabeçalho da página --}}
<div class="page-heading d-flex flex-column flex-md-row align-items-md-center justify-content-between gap-3 mb-4">


    
    <div class="page-heading-copy">

        
        <div class="d-flex align-items-center gap-3">
           
<div class="heading-actions"><a class="btn btn-outline-secondary btn-sm" href="users.html"><i class="bi bi-arrow-left" aria-hidden="true"></i> Back to Users</a></div>  
            <div>
            
                <h1 class="h3 mb-1">Cadastro de Escolas</h1>
                <p class="text-muted mb-0">
                    Gerencie as escolas cadastradas no sistema.
                </p>
            </div>

            
        </div>
    </div>


</div>


{{-- Formulário de cadastro --}}
<section class="panel mb-4" id="formulario-escola">

    <div class="panel-header">
        <div>
            <h2 class="h5 mb-1 section-title">
                <i class="bi bi-building-add"></i>
                <span>Cadastro de Escola</span>
            </h2>

            <p class="text-muted mb-0">
                Preencha os dados para cadastrar uma nova escola.
            </p>
        </div>
    </div>

    <div class="panel-body p-4">

        <form method="POST" action="/salvar">

            @csrf

            <div class="row g-3">

                {{-- Nome --}}
                <div class="col-12 col-md-6">
                    <label for="nome" class="form-label">
                        Nome da Escola
                    </label>

                    <input
                        type="text"
                        name="nome"
                        id="nome"
                        class="form-control"
                        placeholder="Digite o nome da escola"
                        required
                    >
                </div>


                {{-- Email --}}
                <div class="col-12 col-md-6">
                    <label for="email" class="form-label">
                        Email
                    </label>

                    <input
                        type="email"
                        name="email"
                        id="email"
                        class="form-control"
                        placeholder="Digite o email da escola"
                        required
                    >
                </div>


                {{-- NIF --}}
                <div class="col-12 col-md-4">
                    <label for="nif" class="form-label">
                        NIF
                    </label>

                    <input
                        type="text"
                        name="nif"
                        id="nif"
                        class="form-control"
                        placeholder="Digite o NIF"
                        required
                    >
                </div>


                {{-- Província --}}
                <div class="col-12 col-md-4">
                    <label for="provincia" class="form-label">
                        Província
                    </label>

                    <input
                        type="text"
                        name="provincia"
                        id="provincia"
                        class="form-control"
                        placeholder="Digite a província"
                        required
                    >
                </div>


                {{-- Telefone --}}
                <div class="col-12 col-md-4">
                    <label for="telefone" class="form-label">
                        Telefone
                    </label>

                    <input
                        type="text"
                        name="telefone"
                        id="telefone"
                        class="form-control"
                        placeholder="Digite o telefone"
                        required
                    >
                </div>


                {{-- Morada --}}
                <div class="col-12">
                    <label for="morada" class="form-label">
                        Morada
                    </label>

                    <input
                        type="text"
                        name="morada"
                        id="morada"
                        class="form-control"
                        placeholder="Digite a morada da escola"
                        required
                    >
                </div>


                {{-- Estado --}}
                <div class="col-12 col-md-6">
                    <label for="status" class="form-label">
                        Estado
                    </label>

                    <select
                        name="status"
                        id="status"
                        class="form-select"
                        required
                    >
                        <option value="activo">Activo</option>
                        <option value="suspenso">Suspenso</option>
                        <option value="inactivo">Inactivo</option>
                    </select>
                </div>


                {{-- Nível --}}
                <div class="col-12 col-md-6">
                    <label for="nivel" class="form-label">
                        Nível
                    </label>

                    <select
                        name="nivel"
                        id="nivel"
                        class="form-select"
                        required
                    >
                        <option value="superior">Superior</option>
                        <option value="primario">Primário</option>
                        <option value="medio">Médio</option>
                    </select>
                </div>


                {{-- Botão --}}
                <div class="col-12 mt-3">

                    <button
                        type="submit"
                        class="btn btn-primary"
                    >
                        <i class="bi bi-check-circle me-1"></i>
                        Cadastrar Escola
                    </button>

                </div>

            </div>

        </form>

    </div>

</section>



</div>



@endsection
