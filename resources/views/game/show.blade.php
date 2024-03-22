<x-layout>
  <header class="header-detail">
    <div class="container">
        <h1 class="text-center text-danger">{{$game->title}}</h1>
        <div class="row">
            <div class="col-12">
                <div class="card mb-3 div2">
                    <div class="row g-0">
                      <div class="col-md-4">
                        <img src="{{Storage::url($game->img)}}" class="img-fluid rounded-start" alt="game detail">
                      </div>
                      <div class="col-md-8">
                        <div class="card-body d-flex flex-column justify-content-between bg-info h-100 div-opacity">
                          <h5 class="card-title">{{$game->title}}</h5>
                          <p class="card-text fw-bold">{{$game->description}}</p>
                          <p class="card-text fw-bold">{{$game->price}} €</p>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
  </header>
</x-layout>