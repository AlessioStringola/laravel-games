<x-layout>
  <header class="header-edit">
    <div class="container">
        <h1 class="text-center h1-create">Game edit</h1>
        <div class="row py-4">
            <div class="col-12 col-md-8">
                <form action="{{route('game.update',compact('game'))}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="mb-3">
                      <label for="title" class="form-label bg-body text-warning fw-bold">Title</label>
                      <input type="text" class="form-control bordercreate" id="title" name="title" value="{{$game->title}}">
                      @error('title')<p class="lead text-danger">{{$message}}</p>@enderror
                    </div>
                    <div class="mb-3 d-flex flex-column">
                      <label for="description" class="form-label bg-body text-warning fw-bold">Description</label>
                      <textarea name="description" id="description" cols="30" rows="10" class=" bordercreate">{{$game->description}}</textarea>
                      @error('description')<p class="lead text-danger">{{$message}}</p>@enderror
                    </div>
                    <div class="mb-3">
                        <label for="category" class="form-label bg-body text-warning fw-bold">Select category</label>
                        <select class="form-select bordercreate" id="category" name="category">
                            <option selected></option>
                            @foreach($categories as $category)
                            <option value="{{$category->id}}"@selected($category==$game->category)>{{$category->name}}</option>
                            @endforeach
                        </select>
                        @error('category')<p class="lead text-danger">{{$message}}</p>@enderror
                    </div>
                    <div class="row mx-0 justify-content-center">
                        <label for="console" class="form-label text-center my-3 bg-body text-warning fw-bold">Console</label>                 
                        @foreach($consoles as $console)
                      <div class="col-12 col-md-2 form-check">
                        <input name="console[]" class="form-check-input mb-4 bordercreate" type="checkbox" value="{{$console->id}}" id="flexCheckDefault" @checked($game->consoles->contains($console))>
                        <label class="form-check-label" for="flexCheckDefault">
                          {{$console->name}}
                      </div>
                      @endforeach
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label bg-body text-warning fw-bold">Price</label>
                        <input type="text" class="form-control bordercreate" id="price" name="price" value="{{$game->price}}">
                        @error('price')<p class="lead text-danger">{{$message}}</p>@enderror
                    </div>
                    <div class="mb-3">
                        <label for="img" class="form-label bg-body text-warning fw-bold">Image</label>
                        <input type="file" class="form-control bordercreate" id="img" name="img">
                        @error('img')<p class="lead text-danger">{{$message}}</p>@enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
    </div>
  </header>
</x-layout>