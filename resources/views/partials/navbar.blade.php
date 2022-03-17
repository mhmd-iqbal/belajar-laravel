<header>
  <nav class="navbar navbar-dark bg-primary navbar-expand-lg fixed-top px-2">
    <div class="container-fluid">
      <a class="navbar-brand text-uppercase" style="letter-spacing: 1px;" href="#">Belajar Laravel 8</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
        aria-controls="offcanvasNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Belajar Laravel 8</h5>
          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link {{ $title === 'Home' ? 'active' : '' }}" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ $title === 'About' ? 'active' : '' }}" href="/about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ $title === 'Blog' ? 'active' : '' }}" href="/posts">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ $title === 'Post Categories' ? 'active' : '' }}" href="/categories">Category</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
</header>
