<aside class="main-sidebar" id="sidebar-wrapper">
<section class="sidebar">
<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        @if (Route::has('login'))
          <ul class="nav navbar-nav">

              @if (Auth::check())

                   <li><a href="{{ url('/') }}"><i class="fas fa-user"></i> {{ Auth::user()->name}} </a></li>
                   <li><a href="{{ url('/home') }}"><i class="fas fa-laptop"></i>	Home </a></li>
                   <li><a href="{{ url('/hotels') }}"><i class="fab fa-fort-awesome-alt"></i> Hotels</a></li>


                   <ul class="nav navbar-nav navbar-right">
                       <li>
                           <a href="{!! url('/logout') !!}"
                              onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                               Cerrar sesión
                           </a><i class="fas fa-door-open"></i>
                           <form id="logout-form" action="{{ url('/logout') }}" method="POST"
                               style="display: none;">
                             {{ csrf_field() }}
                            </form>
                       </li>
                   </ul>


              @else
                  <li><a href="{{ url('/login') }}"><i class="fas fa-universal-access"></i>	Login </a></li>
                  <li><a href="{{ url('/register') }}"><i class="fas fa-address-card"></i>	Register </a></li>

              @endif

          </ul>
         @endif

        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
</nav>
</section>
</aside>
<br/>
<br/>




