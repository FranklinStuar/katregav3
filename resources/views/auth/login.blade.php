@extends('auth.app')

@section('title')
Iniciar Sesión
@endsection

@section('content')
	 <!-- /.login-logo -->
   <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Iniciar sesion</p>

      <form action="{{ route('login') }}" method="post">
						@csrf

        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required placeholder="Correo electrónico" autofocus>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
          
          @error('email')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Contraseña" required autocomplete="current-password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
          @error('password')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
              <label for="remember">
                Recordar Contraseña
              </label>
              
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Iniciar Sesion</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <p class="mb-1">
        <a href="forgot-password.html">Olvidé mi contraseña</a>
      </p>
      <p class="mb-0">
        <a href="register.html" class="text-center">Registrarme</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
@endsection