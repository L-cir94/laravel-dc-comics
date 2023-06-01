<header>
    <div class="container">
        <div class="row">
            <div class="navbar">
                <div class="logo">
                  <a href="{{route('home')}}"><img class="img-fluid" src="{{ Vite::asset('resources\img\dc-logo.png') }}" alt="dc-logo.png"></a>  
                </div>
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link" href="/home">Homepage</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/comics">Comics DC</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Movies</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tv</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Games</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Videos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Fans</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.comics.index')}}">Admin</a>
                    </li>
            
                </ul>
            </div>
        </div>
    </div>
<!-- Tab panes -->

</header>