<!DOCTYPE html>
<html>
<head>
    <title>@lang('message.elearning')</title>
    {!! Html::script('js/app.js') !!}

    {!! Html::style('css/app.css') !!}

    {{ Html::style("https://fonts.googleapis.com/css?family=Roboto:400,500,700") }}
</head>
<body>
 <!-- HEADER -->

 <header class=''>
  <!-- Navbar -->
  <div class="navbar navbar-fedora navbar-fixed-top is-at-top bs-docs-navis-not-signed-in" id='navbar' role='navigation'>
    <div class='container'>
      <div class='navbar-header'>
        <!-- Site logo -->
        <a class='navbar-brand header-logo' href="#">@lang('message.elearning')</a>
          <!-- Header Menu -->
          <div class='collapse navbar-collapse navbar-header-collapse'>
            <ul class='nav navbar-nav navbar-right navbar-nav ml-auto'>
              <li>
                <a class='fedora-navbar-link navbar-link' href='#' target=''>@lang('message.my_course')</a>
              </li>
              <li>
                <a class='fedora-navbar-link navbar-link current-page' href='#' target=''>@lang('message.all_course')</a>
              </li>
            <!-- Authentication -->
              @guest
                <li>
                  <a class='navbar-link fedora-navbar-link' href="{{route('login')}}">@lang('message.login')</a>
                </li>
                @if (Route::has('register'))
                <li>
                  <a class='btn btn-primary pull-right btn-lg' href="{{route('register')}}">@lang('message.signup')</a>
                </li>
                @endif
                @else
                <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a id="logout" class="dropdown-item" href="{{ route('logout') }}" >@lang('message.logout')</a>
                      {!! Form::open(['routes'=>'logout', 'id' => 'logout-form']) !!}
                      {!! Form::close() !!}
                  </div>
                </li>
              @endguest
          </div>
      </div>
    </div>
  </div>
</header>
  @yield('content')
<footer class='bottom-menu bottom-menu-inverse'>
  <div class='container'>
    <div class='row'>
      <div class='col-xs-12 col-sm-4 col-md-4 footer-column'>
        <p>
          &copy;
          E-Learning
        </p>
      </div>
    </div>
  </div>
</footer>
</body>
</html>
