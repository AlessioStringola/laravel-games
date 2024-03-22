<x-layout>
    <header class="headerfiltrato py-4">
    <div class="container">
        <h1 class="text-center">{{$category->name}}</h1>
        <div class="row">
            @foreach($category->games as $game)
                <div class="col-12 col-md-4">
                    <div class="card div1">
                        <img src="{{Storage::url($game->img)}}" class="card-img-top img1" alt="image">
                        <div class="card-body">
                          <h5 class="card-title">{{$game->title}}</h5>
                          <p class="card-text">{{$game->price}} €</p>
                          <a class="fw-bold p2" href="{{route('game.filterbycategory',["category"=>$game->category])}}">{{$game->category->name}}</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</header>
</x-layout>