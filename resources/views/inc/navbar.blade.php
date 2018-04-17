<div class="row">
    <div class="row" id="jub">
        <div class="col-md-12">
            <div class="col-md-9 text-left" id="sale">
               <img src="/images/sale2.jpg" width="15%" height="10%">
            </div>
            <div class="col-md-3" id="sl">
                <ul class="nav navbar-nav navbar-right">

                     @guest
                          <li><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                           <li><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                               @else

                        <li class="nav-item dropdown">
                         <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                               </a>


                                        <ul class="dropdown-menu" role="menu">
                                        <li> <a href="/dashboard">Your profile</a></li>
                                                <li>
                                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                                       onclick="event.preventDefault();
                                                           document.getElementById('logout-form').submit();">
                                                            Logout
                                                    </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                        </form>
                                    </li></ul>

    </li>
    @endguest
                </ul>
            </div>
        </div>
</div>
</div>


 <nav class="navbar navbar-inverse">
            <div class="container">



                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <ul class="nav navbar-nav">
                            <li><a href="/posts">HOME</a></li>
                            <li><a href="#">FAVOURITES</a></li>
                            <li><a href="#">CLOTHING</a></li>
                            <li><a href="#">FOOD</a></li>
                            <li><a href="#">TECHNOLOGY</a></li>
                            <li><a href="#">OTHERS</a></li>


                        <!-- Authentication Links -->

                    </ul>
                </div>
            </div>
        </nav>