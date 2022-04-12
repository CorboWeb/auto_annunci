  <!-- Fixed navbar -->
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Annunci Auto</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/annuncio/create">Crea Annuncio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/annunci">I mie Annunci</a>
          </li>
          @guest
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/login">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('register')}}">Registrati</a>
          </li>
          @endguest
          @auth


          @if (Auth::user()->roles=="Amministratore")
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/admin">Pannello Admin</a>
          </li>
          @endif

          <li class="nav-item">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a class="nav-link" href="{{ route('logout') }}"  onclick="event.preventDefault();this.closest('form').submit();">
                Logout
                </a>
            </form>
          </li>


          @endauth
        </ul>

  </nav>
