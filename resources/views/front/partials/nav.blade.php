<ul class="nav justify-content-between bg-eliano h-60 d-flex align-items-center sticky-top">
  <li class="nav-item">
    <a class="nav-link menu-open" href="#"><i class="fi-xwlux2-three-bars-solid text-white"></i></a>
  </li>
  <!-- Authentication Links -->
  @guest
      <li class="login nav-item">
          <a class="nav-link text-white bold-20" href="{{ route('login') }}">LOGIN</a>
      </li>
    @else
      <li class="nav-item dropdown text-white bold-20">
        <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
          Ciao {{ Auth::user()->name }} <span class="caret"></span>
        </a>

        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
          @if (Route::has('dash'))
            <a class="dropdown-item" href="{{ route('home') }}">Home</a>
          @endif

          <a class="dropdown-item" href="{{ route('dash') }}">Pannello</a>
          <a class="dropdown-item" href="{{ route('logout') }}"
          onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">
          {{ __('Logout') }}
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
        </form>
      </div>
    </li>
  @endguest
</ul>
