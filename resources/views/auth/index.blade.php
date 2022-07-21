@extends('auth.template.main')

@section('container')

<main class="form-signin w-100 m-auto">
<br><br><br>
  <form action="/login" method="post">
    @csrf
    <h1 class="h3 mb-5 fw-normal">Sign-In</h1>
    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success')}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <div class="form-floating">
      <input type="email" class="form-control @error('email')is-invalid @enderror" id="email" name="email" placeholder="name@example.com" autofocus >
      <label for="email">Email address</label>
      @error('email')
      <div  class="invalid-feedback">
      {{$message}}
      </div>
      @enderror
    </div>
    <div class="form-floating mb-5">
      <input type="password" class="form-control @error('password')is-invalid @enderror" id="password" name="password" placeholder="Password">
      <label for="password">Password</label>
      @error('password')
      <div  class="invalid-feedback">
      {{$message}}
      </div>
      @enderror
    </div>

    <div class="checkbox mb-5">
      
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
  </form>
  <small class="d-block text-center mt-3">Not Registered? <a href="/register">Register Now!</a></small>
</main>
@endsection