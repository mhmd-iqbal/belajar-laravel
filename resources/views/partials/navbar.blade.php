<header>
  <nav class="navbar navbar-dark bg-primary navbar-expand-lg fixed-top px-2">
    <div class="container-fluid">
      <a class="navbar-brand text-uppercase" style="letter-spacing: 1px;" href="#">Belajar Laravel 8</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
        aria-controls="offcanvasNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header bg-primary">
          <h5 class="offcanvas-title text-uppercase text-white" style="letter-spacing: 1px;" id="offcanvasNavbarLabel">
            Belajar Laravel 8</h5>
          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body bg-primary">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="/about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ Request::is('posts') ? 'active' : '' }}" href="/posts">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ Request::is('categories') ? 'active' : '' }}" href="/categories">Category</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ Request::is('authors') ? 'active' : '' }}" href="/authors">Author</a>
            </li>
            @auth
              <li class="nav-item">
                <div class="btn-group">
                  <a class="nav-link dropdown-toggle" type="button" id="defaultDropdown" data-bs-toggle="dropdown"
                    data-bs-auto-close="true" aria-expanded="false">
                    Hi, {{ auth()->user()->name }}
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="defaultDropdown">
                    <li><a class="dropdown-item {{ Request::is('dashboard') ? 'active' : '' }}"
                        href="/dashboard">Dashboard</a>
                    </li>
                    <li><a class="dropdown-item {{ Request::is('dashboard/posts*') ? 'active' : '' }}"
                        href="/dashboard/posts">Posts</a>
                    </li>
                    <li class="dropdown-divider"></li>
                    <li>
                      <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="dropdown-item" href="/logout">Logout</button>
                      </form>
                    </li>
                  </ul>
                </div>
              </li>
            @else
              <li class="nav-item">
                <a class="nav-link {{ $title === 'Login Page' ? 'active' : '' }}" href="/auth/login">Login</a>
              </li>
            @endauth

          </ul>
        </div>
      </div>
    </div>
  </nav>
</header>
