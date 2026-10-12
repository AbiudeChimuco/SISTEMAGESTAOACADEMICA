<!DOCTYPE html>
<html lang="pt-BR">
<head>
    @include('sistema.template.topo')
</head>
<body>
<div class="admin-shell">
    <div class="sidebar-backdrop" data-sidebar-close></div>

    @include('sistema.template.menu')

    <div class="admin-main">

        @include('sistema.template.header')

        <main class="dashboard-content">
            <div class="container-fluid px-3 px-lg-4 py-4">

                @section('main-content')
                @show

            </div>
        </main>

        @include('sistema.template.rodape')

    </div>
</div>
</body>
</html>