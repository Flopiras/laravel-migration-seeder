<header>
    <div class="bg-dark">

        <div class="container">
            <h1 class="text-center text-danger py-4">Boolean Train Table</h1>

            {{-- navbar --}}
            <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
                <div class="container-fluid">
                  <a class="navbar-brand" href="{{ route('home') }}">Boolean's Train</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a class="nav-link @if(Route::is('home')) active @endif" aria-current="page" href="{{ route('home') }}">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{url('/trains')}}">Trains</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                      </li>
                      
                    </ul>
                  </div>
                </div>
              </nav>
        </div>
    </div>
</header>