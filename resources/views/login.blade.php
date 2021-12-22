@extends("layout")

@section("main")


<form class="container col-lg-3 col-md-6 col-sm-12 col-xs-12 mt-5 mb-5" method="POST" action="">
  @csrf

    <h3 class="text-center">Welcome back!</h3>
    <!-- Email input -->
    <div class="form-outline mb-4">
      <input name="email" type="email" id="form1Example1" class="form-control" />
      <label class="form-label" for="form1Example1">Email address</label>
    </div>
  
    <!-- Password input -->
    <div class="form-outline mb-4">
      <input name="password" type="password" id="form1Example2" class="form-control" />
      <label class="form-label" for="form1Example2">Password</label>
    </div>
  
    <!-- 2 column grid layout for inline styling -->
    <div class="row mb-4">
      <div class="col d-flex justify-content-center">
        <!-- Checkbox -->
        <div class="form-check">
          <input
            class="form-check-input"
            type="checkbox"
            value=""
            id="form1Example3"
            checked
          />
          <label class="form-check-label" for="form1Example3"> Remember me </label>
        </div>
      </div>
  
      <div class="col text-center">
        <!-- Simple link -->
        <a href="#!">Forgot password?</a>
      </div>
    </div>
   <!-- Error Message -->
    @error('message')
      <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">* Error</p>
    @enderror

    <!-- Submit button -->
    <div class="col text-center"><button type="submit" class="btn btn-danger btn-block ">Sign in</button></div>
    <!-- Register buttons -->
    <div class="text-center mb-5">
        <p class="m-1">Conectate a través de:</p>
        <button type="button" class="btn btn-danger btn-floating mx-1">
          <i class="fab fa-facebook-f"></i>
        </button>
    
        <button type="button" class="btn btn-danger btn-floating mx-1">
          <i class="fab fa-google"></i>
        </button>
    
        <button type="button" class="btn btn-danger btn-floating mx-1">
          <i class="fab fa-twitter"></i>
        </button>
    
        <button type="button" class="btn btn-danger btn-floating mx-1">
          <i class="fab fa-github"></i>
        </button>
      </div>
  </form>
  
@endsection