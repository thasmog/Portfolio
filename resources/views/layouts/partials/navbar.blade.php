<section class="navbar box container">
    <nav>
      <span>
        <a href="{{url('/')}}" title="alan aasmaa" id="logo">alan aasmaa</a>
      </span>
      <input type="checkbox" id="nav-trigger" />
      <label for="nav-trigger">
        <i class="fa fa-bars" aria-hidden="true"></i>
      </label>
    </nav>
    <nav id="nav">
      <ul>
        <li><a class="{!! set_active('/') !!}" href="/">Etusivu</a></li>
        <li><a class="{!! set_active('blog') !!}" href="{{ url('blog')}}" aria-haspopup="true">Blog<i class="fa fa-caret-down" aria-hidden="true"></i></a>
          <ul>
            <li><a href="/">Design</a></li>
            <li><a href="/">HTML</a></li>
            <li><a href="/">CSS</a></li>
            <li><a href="/">Java</a></li>
          </ul>
        </li>
        <li><a class="{!! set_active('portfolio') !!}" href="{{ url('portfolio')}}">Portfolio</a></li>
      </ul>
    </nav>
    <nav>
      @if (Auth::check())
      <ul>
      <li><a class="{!! set_active('profile/*') !!}" href="/profile/{{ Auth::user()->name}}">{{ Auth::user()->name }}<i class="fa fa-caret-down" aria-hidden="true"></i></a>
          <ul>
            <li><a href="/profile/{{ Auth::user()->name}}">Profile</a></li>
            <li><a href="/profile/{{ Auth::user()->name}}/edit">Settings</a></li>
            <li><a href="/logout">Logout</a></li>
          </ul>
        </li>
        <a href="/profile/{{ Auth::user()->name}}"><img class="navimg" src="{{ Gravatar::src(Auth::user()->email, 40)  }}"></a>
      </ul>
      @else 
      <ul>
        <li><a class="{!! set_active('auth/login') !!}" href="/login">Login</a></li>
        <li><a class="{!! set_active('auth/register') !!}" href="/register">Register</a></li>
      </ul>
      @endif
    </nav>
</section>