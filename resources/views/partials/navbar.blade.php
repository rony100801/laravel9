{{-- NAVBAR SECTION --}}
<nav class="navbar navbar-expand-lg bg-danger navbar-dark mb-4">
  <div class="container">
    <a class="navbar-brand" href="/">Rony Blog</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link {{ ($active === "home") ? 'active' : '' }}" aria-current="page" href="/">Home</a>
        <a class="nav-link {{ ($active === "about") ? 'active' : '' }}" href="/about">About</a>
        <a class="nav-link {{ ($active === "posts") ? 'active' : '' }}" href="/posts">Blog</a>
        <a class="nav-link {{ ($active === "categories") ? 'active' : '' }}" href="/categories">Categories</a>
      </div>
      @auth
      <ul class="navbar-nav ms-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Welcome back, {{ auth()->user()->name }}
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/dashboard">My Dashboard</a></li>
            <li><hr class="dropdown-divider"></li>
            <li>
              <form action="/logout" method="post">
                @csrf
                <button type="submit" class="dropdown-item">Logout</button>
              </form>
            </li>
          </ul>
        </li>
      </ul>
       @else  
       <div class="navbar-nav ms-auto">
        <a href="/login" class="nav-link {{ ($active === "login") ? 'active' : '' }}">Login</a>
        </div> 
      @endauth
    </div>
  </div>
</nav>
{{-- END NAVBAR SECTION --}}