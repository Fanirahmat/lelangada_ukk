@extends('layouts.authLayout')

@section('title')
    Login
@endsection
@section('content')
<div class="container mt--8 pb-5">
  <div class="row justify-content-center">
    <div class="col-lg-5 col-md-7">
      <div class="card bg-secondary shadow border-0">
        
        <div class="card-body px-lg-5 py-lg-5">
          <div class="text-center text-muted mb-4">
            <small>Or sign in with credentials</small>
          </div>
          <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group mb-3">
              <div class="input-group input-group-alternative">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                </div>
                <input name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}"  placeholder="Email" type="email" required autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
            </div>
            <div class="form-group">
              <div class="input-group input-group-alternative">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                </div>
                <input name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" type="password" required autocomplete="current-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
            </div>
            <div class="custom-control custom-control-alternative custom-checkbox">
              <input class="custom-control-input" name="remember" id="remember customCheckLogin" type="checkbox" {{ old('remember') ? 'checked' : '' }}>
              <label class="custom-control-label" for=" customCheckLogin">
                <span class="text-muted">{{ __('Remember Me') }}</span>
              </label>
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-primary my-4">{{ __('Login') }}</button>
              
              @if (Route::has('password.request'))
                  <a class="btn btn-link" href="{{ route('password.request') }}">
                      {{ __('Forgot Your Password?') }}
                  </a>
              @endif
            </div>
          </form>
        </div>
      </div>
      <div class="row mt-3">
        <div class="col-6">
          <a href="#" class="text-light"><small>Forgot password?</small></a>
        </div>
        <div class="col-6 text-right">
          <a href="#" class="text-light"><small>Create new account</small></a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection