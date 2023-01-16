<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
  <div class="container">
    <a class="navbar-brand" href="/">WPU Blog</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ ($title=== "Home") ? 'active' : '' }}" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title=== "About") ? 'active' : "" }}" href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title=== "Posts") ? 'active' : "" }}" href="#">Blog</a>
        </li>
       
      </ul>
      <ul class="navbar-nav ms-auto">
        @auth
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="/login" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspupop="true" aria-expanded="false">
        Login</a>      
        </li>
        Welcome back, {{ auth()->user()->name }}
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse">My Dashboard</a></i>
          <div class="dropdown-divider"></div>
          <form action="/logout" method="post">
            @csrf
            <button type="submit" class="dropdown-item px-3"><i class="bi bi-box-arrow-left">Logout</i></button>
          </form>
          {{-- <a class="dropdown-item" href="#"><i class="bi bi-box-arrow-left">Logout</i> --}}
        </div>
      </li>
    @else
    <ul class="navbar-nav ms-auto">
        <li class="nav-item">
            <a class="nav-link" href="/login"><i class="bi bi-box-arrow-in-right"></i> Login</a>
            @endauth
      </ul>
    </div>
</nav>