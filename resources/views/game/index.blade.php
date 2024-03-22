<x-layout>
  <header class="headerindex">
    <div class="container">
        <h1 class="text-center">Games</h1>
        @if(session()->has('success'))
        <div class="row justify-content-center">
        <div class="alert alert-success d-flex justify-content-center">
            <p class="lead">{{session('success')}}</p>
        </div> 
        </div>
        @endif
        <div class="row">
            @foreach($games as $game)
            <div class="col-12 col-md-3 m-3">
                <div class="card div1">
                    <img src="{{Storage::url($game->img)}}" class="card-img-top img1" alt="image">
                    <div class="card-body">
                      <h5 class="card-title text-center text-truncate">{{$game->title}}</h5>
                      <p class="card-text text-center">{{$game->price}} €</p>
                      <div class="d-flex justify-content-center">
                      <a class="fw-bold p2" href="{{route('game.filterbycategory',["category"=>$game->category])}}">{{$game->category->name}}</a>
                      </div>
                      <div class="my-3 d-flex flex-column align-items-center">
                        <p class="m-0 fw-bold">Disponibile per</p>
                        @foreach($game->consoles as $console)
                        <h2 class="fw-medium p3">
                         {{$console->name}}</h2>
                         @endforeach
                        </div>
                      <div class="d-flex flex-column justify-content-evenly div6">
                      <a href="{{route('game.show',compact('game'))}}" class="btn btn-primary">Detail</a>
                      <a href="{{route('game.edit',compact('game'))}}" class="btn btn-secondary">Edit</a>
                      <form action="{{route('game.destroy',compact('game'))}}" method="post">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger w-100">Delete</button>
                      </form>
                      </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
  </header>
</x-layout>