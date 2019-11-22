@extends('layouts.loginlayout')

@section('content')

<div class="container-fluid">
    <div class="row no-gutter">
      <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
      <div class="col-md-8 col-lg-6">
        <div class="login d-flex align-items-center py-5">
          <div class="container">
            <div class="row">
              <div class="col-md-9 col-lg-8 mx-auto">
                <h3 class="login-heading mb-4">Bienvenido!</h3>
                
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                  <div class="form-label-group">
                    <input type="email" id="email" class="form-control" placeholder="Email address" required autofocus>
                    <label for="email">Email</label>
                  </div>
  
                  <div class="form-label-group">
                    <input type="password" id="password" class="form-control" placeholder="Password" required>
                    <label for="password">Password</label>
                  </div>
  
                  <div class="custom-control custom-checkbox mb-3"><div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Password') }}
                                    </label>
                                </div>
                  </div>
                  <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">Sign in</button>
                  <div class="text-center">
                      
                    @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
