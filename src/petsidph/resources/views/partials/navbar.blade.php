<nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-primary fixed-top">
    <div class="container-fluid">
        <!-- Toggle button -->
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <!-- Brand -->
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('images/navLogo.png') }}" height="30" alt="" loading="lazy" />
            <img src="{{ asset('images/textPetsId.png') }}" height="30" alt="" loading="lazy" />
            <!-- <strong>Pets ID</strong> -->
        </a>
        <!-- Right links -->
        <ul class="navbar-nav ms-auto d-flex flex-row">
            <!-- Notification dropdown -->
            <li class="nav-item dropdown">
                <!-- Search form -->
                <form class="d-md-flex input-group w-auto my-auto">
                    <span class="input-group-text border-0">
                        <a href="{{ url('search') }}" class="btn btn-warning btn-sm" style="background-color: rgba(0, 0, 0, 0.2);" data-attach-loading>Search</a>
                    </span>
                </form>
            </li>
            <!-- Icon dropdown
            <li class="nav-item dropdown">
              <a class="nav-link me-3 me-lg-0 dropdown-toggle hidden-arrow" href="#" id="navbarDropdown" role="button"
                data-mdb-toggle="dropdown" aria-expanded="false">
                <i class="united kingdom flag m-0"></i>
              </a>
              <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li>
                  <a class="dropdown-item" href="#"><i class="united kingdom flag"></i>English
                    <i class="fa fa-check text-success ms-2"></i></a>
                </li>
                <li>
                  <hr class="dropdown-divider" />
                </li>
                <li>
                  <a class="dropdown-item" href="#"><i class="poland flag"></i>Polski</a>
                </li>
                <li>
                  <a class="dropdown-item" href="#"><i class="china flag"></i>中文</a>
                </li>
                <li>
                  <a class="dropdown-item" href="#"><i class="japan flag"></i>日本語</a>
                </li>
                <li>
                  <a class="dropdown-item" href="#"><i class="germany flag"></i>Deutsch</a>
                </li>
                <li>
                  <a class="dropdown-item" href="#"><i class="france flag"></i>Français</a>
                </li>
                <li>
                  <a class="dropdown-item" href="#"><i class="spain flag"></i>Español</a>
                </li>
                <li>
                  <a class="dropdown-item" href="#"><i class="russia flag"></i>Русский</a>
                </li>
                <li>
                  <a class="dropdown-item" href="#"><i class="portugal flag"></i>Português</a>
                </li>
              </ul>
            </li>
            -->
            <!-- Avatar -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle hidden-arrow d-flex align-items-center" href="#" id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                    <img src={{ asset('images/avatar.png') }} class="rounded-circle" height="22" alt="Avatar" loading="lazy" />
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="{{ url('user/profile') }}">My profile</a></li>
                    <li><a class="dropdown-item" href="{{ url('user/settings') }}">Settings</a></li>
                    <li><a class="dropdown-item" href="{{ url('user/logout') }}">Logout</a></li>
                    <li><a class="dropdown-item" href="{{ url('user/register') }}">Register</a></li>
                    <li><a class="dropdown-item" href="{{ url('user/login') }}">Login</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
