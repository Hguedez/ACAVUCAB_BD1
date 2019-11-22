@extends('layouts.registerlayout')

@section('content')
    
    <div class="container">
            <div class="row">
              <div class="col-lg-10 col-xl-9 mx-auto">
                <div class="card card-signin flex-row my-5">
                  <div class="card-img-left d-none d-md-flex">
                     <!-- Background image for card set in CSS! -->
                  </div>
                  <div class="card-body">
                    <h5 class="card-title text-center">Registrarse</h5>
                    <form class="form-signin">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-label-group">
                                <input type="email" id="inputEmail" class="form-control" placeholder="Email" required>
                                <label for="inputEmail">Email</label>
                              </div>
                
                              <div class="form-label-group">
                                <input type="number" id="inputTelefono" class="form-control" placeholder="Telefono" required>
                                <label for="inputTelefono">Telefono</label>
                              </div>
                
                              <hr>
                
                              <div class="form-label-group">
                                <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                                <label for="inputPassword">Password</label>
                              </div>
                              
                              <div class="form-label-group">
                                <input type="password" id="inputConfirmPassword" class="form-control" placeholder="Password" required>
                                <label for="inputConfirmPassword">Confirm password</label>
                              </div>
                
                              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Registrar</button>
                              <a class="d-block text-center mt-2 small" href="#">Iniciar sesion</a>
                              <hr class="my-4">
                              
                    </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>    
                </div>       
@endsection
