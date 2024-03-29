@extends('auth.template.main')

@section('container')
<main class="form-signin w-100 m-auto">
  <form action="/register" method="post">
    @csrf
    <h1 class="h3 mb-5 fw-normal">Registration Form</h1>
    
    <div class="form-floating">
      <input type="text" class="form-control @error('name')is-invalid @enderror"  id="name" name="name" placeholder="Admin" required value="{{old('name')}}">
      <label for="name">Name</label>
      @error('name')
      <div  class="invalid-feedback">
      {{$message}}
      </div>
      @enderror
    </div>
    <div class="form-floating">
      <input type="email" class="form-control @error('email')is-invalid @enderror" id="email" name="email" placeholder="name@example.com" required value="{{old('email')}}">
      <label for="email">Email address</label>
      @error('email')
      <div  class="invalid-feedback">
      {{$message}}
      </div>
      @enderror
    </div>
    <div class="form-floating">
      <input type="password" class="form-control @error('email')is-invalid @enderror" id="password" name="password" placeholder="Password" required>
      <label for="password">Password</label>
      @error('password')
      <div  class="invalid-feedback">
      {{$message}}
      </div>
      @enderror
    </div>

    <div class="checkbox mb-3">
      
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
  </form>
  <small class="d-block text-center mt-3">You have Account? <a href="/login">Sign-in now!</a></small>
</main>
@endsection