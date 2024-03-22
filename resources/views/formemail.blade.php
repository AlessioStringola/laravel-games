<x-layout>
    <header class="header-email">
    <div class="container">
        <h1 class="text-center">Contact us</h1>
        <div class="row">
            <div class="col-12 col-md-8">
                <form method="post" action="{{route('send.email')}}">
                    @csrf
                    <div class="mb-3">
                      <label for="name" class="form-label fs-4 fw-bold">Name</label>
                      <input name="username" type="text" class="form-control border-4 border-info" id="name" aria-describedby="emailHelp" value="{{old('username')}}">
                      @error('username')<p class="lead text-danger">{{$message}}</p>@enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label fs-4 fw-bold">Email address</label>
                        <input name="email" type="email" class="form-control border-4 border-info" id="email" aria-describedby="emailHelp" value="{{old('email')}}">
                        @error('email')<p class="lead text-danger">{{$message}}</p>@enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label fs-4 fw-bold" for="message">Message</label>
                      <textarea name="message" class="form-control border-4 border-info" id="message" cols="30" rows="10">{{old('message')}}</textarea>
                      @error('message')<p class="lead text-danger">{{$message}}</p>@enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
    </div>
    </header>
</x-layout>