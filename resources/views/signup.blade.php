
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    @include('cdn')
</head>
<body>
  @extends('layout.default')

  @section('content')
  <h1>Signup here!</h1>
    <div class= container-fluid >
    <form method='POST' action='/signup'>
    @csrf
  <!-- 2 column grid layout with text inputs for the first and last names -->
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
        <input type="text" name="name" class="form-control" />
        <label class="form-label" for="name">Name</label>
      </div>
    </div>
    
    </div>
  </div>

  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="email" name="email" class="form-control" />
    <label class="form-label" for="email">Email address</label>
  </div>
  
  <!-- Password input -->
  <div class="form-outline mb-4">
    <input type="password" name="password" class="form-control" />
    <label class="form-label" for="password">Password</label>
  </div>

  <!-- Checkbox -->
  <div class="form-check d-flex justify-content-center mb-4">
    <input class="form-check-input me-2" type="checkbox" value="" name="form2Example33" checked />
    <label class="form-check-label" for="form2Example33">
      Subscribe to our newsletter
    </label>
  </div>

  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block mb-4">Sign up</button>

  <!-- Register buttons -->
  <div class="text-center">
    <p>or sign up with:</p>
    <button type="button" class="btn btn-secondary btn-floating mx-1">
      <i class="fab fa-facebook-f"></i>
    </button>

    <button type="button" class="btn btn-secondary btn-floating mx-1">
      <i class="fab fa-google"></i>
    </button>

    <button type="button" class="btn btn-secondary btn-floating mx-1">
      <i class="fab fa-twitter"></i>
    </button>

    <button type="button" class="btn btn-secondary btn-floating mx-1">
      <i class="fab fa-github"></i>
    </button>
  </div>
</form>
</div>
      
  @endsection
    
</body>
</html>