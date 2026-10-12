<nav class="navbar admin-navbar navbar-expand bg-white">

    <div class="container-fluid px-3 px-lg-4">

        {{-- Botão do menu --}}
        <button
            class="sidebar-toggle"
            type="button"
            data-sidebar-toggle
            aria-controls="adminSidebar"
            aria-expanded="true"
            aria-label="Toggle sidebar">

            <span></span>
            <span></span>
            <span></span>

        </button>


        {{-- Pesquisa --}}
        <form class="d-none d-md-flex ms-3 flex-grow-1"
              role="search">

            <input
                class="form-control search-input"
                type="search"
                placeholder="Pesquisar..."
                aria-label="Pesquisar">

        </form>


        <div class="navbar-actions ms-auto">

            {{-- Tema --}}
            <button
                class="icon-button theme-toggle"
                type="button"
                data-theme-toggle
                aria-label="Alternar tema"
                title="Alternar tema">

                <i
                    class="bi bi-moon-stars"
                    data-theme-icon
                    aria-hidden="true">
                </i>

            </button>


            {{-- Notificações --}}
            <div class="dropdown">

                <button
                    class="icon-button"
                    type="button"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                    aria-label="Notificações">

                    <span class="notification-dot"></span>

                    <i class="bi bi-bell"
                       aria-hidden="true">
                    </i>

                </button>


                <div class="dropdown-menu dropdown-menu-end notification-menu">

                    <div class="dropdown-header fw-bold text-body">
                        Notificações
                    </div>

                    <a class="dropdown-item" href="#">
                        <span class="notification-title">
                            Nova notificação
                        </span>

                        <span class="notification-time">
                            Agora
                        </span>
                    </a>

                    <a class="dropdown-item" href="#">
                        <span class="notification-title">
                            Sistema atualizado
                        </span>

                        <span class="notification-time">
                            Hoje
                        </span>
                    </a>

                </div>

            </div>


            {{-- Utilizador --}}
            <div class="dropdown">

                <button
                    class="profile-button dropdown-toggle"
                    type="button"
                    data-bs-toggle="dropdown"
                    aria-expanded="false">

                    
                        {{ auth()->user()->name ?? 'Utilizador' }}
                    </span>

                </button>


                <ul class="dropdown-menu dropdown-menu-end">

                    <li>
                        <span class="dropdown-item-text small text-muted">
                            {{ auth()->user()->email ?? '' }}
                        </span>
                    </li>

                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li>
                        <a class="dropdown-item"
                           href="{{ route('profile.edit') }}">
                            <i class="bi bi-person me-2"></i>
                            Perfil
                        </a>
                    </li>

                    <li>
                        <a class="dropdown-item"
                           href="#">
                            <i class="bi bi-gear me-2"></i>
                            Configurações
                        </a>
                    </li>

                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="dropdown-item">
                                <i class="bi bi-box-arrow-right me-2"></i>
                                Sair
                            </button>
                        </form>

                    </li>

                </ul>

            </div>

        </div>

    </div>

</nav>