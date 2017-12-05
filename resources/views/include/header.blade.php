@section("header")
  <div class="cover">
    <img src="/img/joao.png"/>
  </div>
  <div class="navigation">
    <a class="{{ Route::is('about') ? 'active' : '' }}"
      href="{{ URL::route('about') }}">About</a>
    <a class="{{ Route::is('projects') ? 'active' : '' }}"
      href="{{ URL::route('projects') }}">Projects</a>
    <a class="{{ Route::is('contact') ? 'active' : '' }}"
      href="{{ URL::route('contact') }}">Contact</a>
  </div>
@show