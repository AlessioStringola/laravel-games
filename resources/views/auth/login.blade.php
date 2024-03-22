<x-layout>
    <header class="header-login">
    <div class="container h-100">
        <h1 class="text-center h1-login fw-bold">Login</h1>
        <div class="row div7 align-items-center">
            <div class="col-12 col-md8">
                <form action="{{route('login')}}" method="post">
                    @csrf
                    <div class="mb-3">
                      <label for="email" class="form-label fs-2 fw-bold h1-login">Email address</label>
                      <input name="email" type="email" class="form-control bordercreate" id="email" aria-describedby="emailHelp" value="{{old('email')}}">
                      @error('email') <p class="text-danger">{{$message}}</p> @enderror
                    </div>
                    <div class="mb-3">
                      <label for="password" class="form-label fs-2 fw-bold h1-login">Password</label>
                      <input name="password" type="password" class="form-control bordercreate" id="password">
                      @error('password') <p class="text-danger">{{$message}}</p> @enderror
                    </div>
                    <button type="submit" class="btn btn-primary butt-login">Submit</button>
                  </form>
            </div>
        </div>
    </div>
    </header>
</x-layout>