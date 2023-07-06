<nav class="navbar navbar-expand-lg navbar-light shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="#"><span class="text-primary">CT</span>-Scanner</a>


        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport"
            aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{url('/')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/')}}#about">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/')}}#doctor">Doctors</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('news') }}">News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/')}}#contact">Contact</a>
                </li>

                @if (Route::has('login'))
                    @auth
                        <li class="nav-item">
                            <a class="nav-link" style="color:green;" href="{{ url('myappointment') }}">My
                                appointment</a>
                        </li>

                        <li class="nav-item">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a href="#" class="nav-link"
                                    onclick="event.preventDefault(); this.closest('form').submit();"
                                    style="color:red">Logout</a>
                            </form>
                        </li>
                    @else
                        <!-- User is not authenticated -->
                        <li class="nav-item">
                            <a class="btn btn-primary ml-lg-3" href="{{ route('login') }}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-primary ml-lg-3" href="{{ route('register') }}">Register</a>
                        </li>
                    @endauth
                @endif


            </ul>
        </div> <!-- .navbar-collapse -->
    </div> <!-- .container -->
</nav>
