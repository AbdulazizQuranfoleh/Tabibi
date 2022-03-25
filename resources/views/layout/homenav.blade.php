<?php $user = Auth::user(); ?>

<nav class="navbar navbar-expand-lg navbar-light">
      <a class="navbar-brand p-1" href="/" style="box-shadow: -4px -4px 0px 0px #3586fd;">Tabibi </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/#contact">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/doctors">Doctors</a>
          </li>

          @if (Auth::check() && $user->role_as == 2)
          <li class="nav-item">
            <a class="nav-link" href="/profile">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/dashboard">Admin</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">Logout</a>
  
            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                class="d-none">
                @csrf
            </form>
          </li>
          @elseif (!Auth::check())
          <li class="nav-item toButton">
            <a class="nav-link" href="/login">Login</a>
          </li>
          @elseif (Auth::check())
          <li class="nav-item toButton">
            <a class="nav-link" href="/profile">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">Logout</a>
  
            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                class="d-none">
                @csrf
            </form>
          </li>
          @endif
        </ul>
      </div>
    </nav>