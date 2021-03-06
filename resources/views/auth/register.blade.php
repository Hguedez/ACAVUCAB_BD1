@extends('layouts.registerlayout')

@section('content')
    
 <!-- Navigation -->
 <div class="container">
  <div class="row">
    <div class="col-lg-10 col-xl-9 mx-auto">
      <div class="card card-signin flex-row my-5">
        <div class="card-img-left d-none d-md-flex">
          <!-- Background image for card set in CSS! -->
       </div>
              <div class="card-body col-sm-6">
                  <h5 class="card-title text-center">Registrarse</h5>
                  <div class="container ">
                    <input type="checkbox" id="natural" value="natural" name="natural">
                    <label for="naturla">Cliente Natural</label>
                  </div>
                  <form method="POST" action="{{ route('register') }}">
                      @csrf

                      <div class="form-group row " >
                          <label for="name" class="col-md-5 col-form-label text-md-right" >{{ __('Primer Nombre') }}</label>

                          <div class="col-md-7">
                              <input id="name" type="text" placeholder="Primer Nombre" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                              @error('name')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="name2" class="col-md-5 col-form-label text-md-right" >{{ __('Segundo Nombre') }}</label>

                          <div class="col-md-7">
                              <input id="name2" type="text" placeholder="Segundo Nombre" class="form-control" name="name2" required autocomplete="name2">

                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="apellido" class="col-md-5 col-form-label text-md-right" >{{ __('Primer Apellido') }}</label>

                          <div class="col-md-7">
                              <input id="apellido" type="text" placeholder="Primer Apellido" class="form-control" name="apellido" required autocomplete="apellido">

                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="apellido2" class="col-md-5 col-form-label text-md-right" >{{ __('Segundo Apellido') }}</label>

                          <div class="col-md-7">
                              <input id="apellido2" type="text" placeholder="Segundo Apellido" class="form-control" name="apellido2" required autocomplete="apellido2">

                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="cedula" class="col-md-5 col-form-label text-md-right" >{{ __('Cedula') }}</label>

                          <div class="col-md-7">
                              <input id="cedula" type="number" placeholder="Cedula" class="form-control" name="cedula" required autocomplete="cedula">

                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="rif" class="col-md-5 col-form-label text-md-right" >{{ __('Rif') }}</label>

                          <div class="col-md-7">
                              <input id="rif" type="text" placeholder="Rif" class="form-control" name="rif" required autocomplete="rif">

                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="email" class="col-md-5 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                          <div class="col-md-7">
                              <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                              @error('email')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                      

                      <div class="form-group row">
                          <label for="password" class="col-md-5 col-form-label text-md-right">{{ __('Password') }}</label>

                          <div class="col-md-7">
                              <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                              @error('password')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="password-confirm" class="col-md-5 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                          <div class="col-md-7">
                              <input id="password-confirm" type="password" placeholder="Confirm-Password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                          </div>
                      </div>
                      
                              <button type="submit" class="btn btn-lg btn-dark btn-block text-uppercase">
                                  {{ __('Registrarse') }}
                              </button>
                          </div>
                      </div>
                  </form>
              </div>
            </div>
          </div>
        </div>
          
@endsection
