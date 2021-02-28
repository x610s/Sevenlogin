<nav class="navbar navbar-expand-lg navbar-dark ">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item ">
        <a class="nav-link" href=" {{route('home')}} ">Home</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href=" {{route('precios.index')}} ">Precios</a>
      </li>

   



  {{-- Registrado --}}
    @auth   
    @if (auth()->user()->hasRoles(Array('admin')))
    <li class="nav-item ">
      <a class="nav-link shadow-lg" href=" {{route('admin.index')}} ">
        Panel Administrador
      </a>
    </li>

    @endif
        
      <li class="nav-item dropdown text-dark">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown"
         aria-haspopup="true" aria-expanded="false">
        {{auth()->user()->name}}
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Profile</a>

          
        <a  class="dropdown-item" href="{{ route('logout') }}"
    onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
    Logout
</a>

<form id="logout-form" action="{{ route('logout') }}" method="POST">
  @csrf
</form>

        </div>
      </li>

        {{-- No registrado --}}
    @else
    
      <li class="nav-item">
        <a class="nav-link" href=" {{route('register')}} ">Registrate</a>
      </li>
        @include('modalLogin.modalLogin')
    @endauth






    </ul>
  </div>
</nav>




{{-- 
   --}}

  