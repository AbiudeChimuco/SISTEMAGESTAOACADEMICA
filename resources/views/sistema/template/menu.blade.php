<aside class="admin-sidebar" id="adminSidebar" aria-label="Main navigation">
 <div class="sidebar-header">
 <a class="brand-mark" href="{{ url('/') }}" aria-label="adminHMD dashboard">
 <span class="brand-icon"><i class="bi bi-grid-1x2-fill" aria-hidden="true"></i></span>
 <span class="brand-copy">
 <span class="brand-title">GestSchool</span>
 <span class="brand-subtitle">Gestão Escolar</span>
 </span>
 </a>
 </div>


 <nav class="sidebar-nav">
 <a class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}" href="{{ url('/dashboard') }}">
 <span class="nav-icon"><i class="bi bi-speedometer2" aria-hidden="true"></i></span>
 <span class="nav-text">Dashboard</span>
 </a>
 
 <a class="nav-link {{ request()->is('escola') ? 'active' : '' }}" href="{{ url('/escola') }}">
 <span class="nav-icon"><i class="bi bi-people" aria-hidden="true"></i></span>
 <span class="nav-text">Escolas</span>
 </a>
 <a class="nav-link {{ request()->is('add-user') ? 'active' : '' }}" href="{{ url('/add-user') }}">
 <span class="nav-icon"><i class="bi bi-person-plus" aria-hidden="true"></i></span>
 <span class="nav-text">Add User</span>
 </a>
 <a class="nav-link {{ request()->is('turma') ? 'active' : '' }}" href="{{ url('/turma') }}">
 <span class="nav-icon"><i class="bi bi-people" aria-hidden="true"></i></span>
 <span class="nav-text">Turmas</span>
 </a>
 <a class="nav-link {{ request()->is('charts') ? 'active' : '' }}" href="{{ url('/charts') }}">
 <span class="nav-icon"><i class="bi bi-bar-chart-line" aria-hidden="true"></i></span>
 <span class="nav-text">Charts</span>
 </a>
 <a class="nav-link {{ request()->is('tables') ? 'active' : '' }}" href="{{ url('/tables') }}">
 <span class="nav-icon"><i class="bi bi-table" aria-hidden="true"></i></span>
 <span class="nav-text">Tables</span>
 </a>
 <a class="nav-link {{ request()->is('forms') ? 'active' : '' }}" href="{{ url('/forms') }}">
 <span class="nav-icon"><i class="bi bi-ui-checks-grid" aria-hidden="true"></i></span>
 <span class="nav-text">Forms</span>
 </a>
 <a class="nav-link {{ request()->is('components') ? 'active' : '' }}" href="{{ url('/components') }}">  <span class="nav-icon"><i class="bi bi-grid-3x3-gap" aria-hidden="true"></i></span>
 <span class="nav-text">Components</span>
 </a>
<a class="nav-link {{ request()->is('alerts') ? 'active' : '' }}" href="{{ url('/alerts') }}">
 <span class="nav-icon"><i class="bi bi-exclamation-triangle" aria-hidden="true"></i></span>
<span class="nav-text">Alerts</span>
 </a>
<a class="nav-link {{ request()->is('modals') ? 'active' : '' }}" href="{{ url('/modals') }}">
<span class="nav-icon"><i class="bi bi-window-stack" aria-hidden="true"></i></span>
<span class="nav-text">Modals</span>
</a>
 <a class="nav-link {{ request()->is('settings') ? 'active' : '' }}" href="{{ url('/settings') }}">
 <span class="nav-icon"><i class="bi bi-gear" aria-hidden="true"></i></span>
 <span class="nav-text">Settings</span>
 </a>
 <a class="nav-link {{ request()->is('blank') ? 'active' : '' }}" href="{{ url('/blank') }}">
<span class="nav-icon"><i class="bi bi-file-earmark" aria-hidden="true"></i></span>
<span class="nav-text">Blank Page</span> </a>
</nav>
</aside>

