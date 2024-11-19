<nav class="navbar">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <h4><img src="{{ asset('img/logoatas.png') }}" alt="Logo" width="30" height="24" > Invfest Website</h4>
      </a>
    </div>
  </nav>

<div class="sidebar">
    <nav class="nav flex-column">
        <a href="" class="nav-link">
            <span class="icon">
                <i class="bi bi-columns-gap"></i>
            </span>
            <span class="description">
                Dashboard
            </span>
        </a>
        <a href="" class="nav-link">
            <span class="icon">
                <i class="bi bi-bag"></i>
            </span>
            <span class="description">
                Menu
            </span>
        </a>
        {{-- Dropdown Menu --}}
        <a href="" class="nav-link" data-bs-toggle="collapse"
        data-bs-target="#submenu" aria-expanded="false" aria-controls="submenu">
            <span class="icon">
                <i class="bi bi-person"></i>
            </span>
            <span class="description">
                Anu <i class="bi bi-caret-down"></i>
            </span>
        </a>
        {{-- Dropdown submenu --}}
        <div class="sub-menu collapse" id="submenu">
            <a href="" class="nav-link">aowkoak</a>
            <a href="" class="nav-link">aowkoak</a>
        </div>
    </nav>
</div>
