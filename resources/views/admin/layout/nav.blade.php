@extends('layouts.app')

@section('content')
<div id= app>
    <div class="wrapper ">
        <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">

          <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
              Creative Tim
            </a></div>
          <div class="sidebar-wrapper">
            <ul class="nav">
              <li class="nav-item active  ">
                <router-link to="/" class="nav-link" >
                  <i class="material-icons">Home</i>
                  <p>Home</p>
                </router-link>
              </li>
              <li class="nav-item ">
                <router-link to="/stock" class="nav-link" >
                  <i class="material-icons"></i>
                  <p>Item_Stock</p>
                </router-link>
              </li>
              <li class="nav-item ">
                <router-link to="/Sell"class="nav-link" >
                  <i class="material-icons"></i>
                  <p>Item_Sell</p>
                </router-link>
              </li>
              <li class="nav-item ">
                <router-link to="/coustomer" class="nav-link">
                  <i class="material-icons"></i>
                  <p>Coustomer</p>
                </router-link>
              </li>
              

            </ul>
          </div>
        </div>
        <div class="main-panel">
          <!-- Navbar -->
          <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
            <div class="container-fluid">
              <div class="navbar-wrapper">
                <a class="navbar-brand" href="javascript:;">Dashboard</a>
              </div>
              <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon icon-bar"></span>
                <span class="navbar-toggler-icon icon-bar"></span>
                <span class="navbar-toggler-icon icon-bar"></span>
              </button>
              <div class="collapse navbar-collapse justify-content-end">
                <form class="navbar-form">
                  <div class="input-group no-border">
                    <input type="text" value="" class="form-control" placeholder="Search...">
                    <button type="submit" class="btn btn-white btn-round btn-just-icon">
                      <i class="material-icons">search</i>
                      <div class="ripple-container"></div>
                    </button>
                  </div>
                </form>
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" href="javascript:;">
                      <i class="material-icons">dashboard</i>
                      <p class="d-lg-none d-md-block">
                        Stats
                      </p>
                    </a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="material-icons">notifications</i>
                      <span class="notification">5</span>
                      <p class="d-lg-none d-md-block">
                        Some Actions
                      </p>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="#">Mike John responded to your email</a>
                      <a class="dropdown-item" href="#">You have 5 new tasks</a>
                      <a class="dropdown-item" href="#">You're now friend with Andrew</a>
                      <a class="dropdown-item" href="#">Another Notification</a>
                      <a class="dropdown-item" href="#">Another One</a>
                    </div>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="material-icons">person</i>
                      <p class="d-lg-none d-md-block">
                        Account
                      </p>
                
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                      
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                  </li>
                  @endguest
                </a>
                </ul>
              </div>
            </div>
          </nav>
          <!-- End Navbar -->
          <div class="content">
            <router-view></router-view>
          </div>
        
         

        </div>
      </div>

</div>
</div>
@endsection
