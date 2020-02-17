@extends('layouts.authLayout')

@section('title')
    Register
@endsection
@section('content')
<div class="container mt--8 pb-5">
  <!-- Table -->
  <div class="row justify-content-center">
    <div class="col-lg-6 col-md-8">
      <div class="card bg-secondary shadow border-0">
        <div class="card-header bg-transparent pb-5">
          <div class="text-muted text-center mt-2 mb-4"><small>Sign up with</small></div>
          <div class="text-center">
            <a href="#" class="btn btn-neutral btn-icon mr-4">
              <span class="btn-inner--icon"><img src="../assets/img/icons/common/github.svg"></span>
              <span class="btn-inner--text">Github</span>
            </a>
            <a href="#" class="btn btn-neutral btn-icon">
              <span class="btn-inner--icon"><img src="../assets/img/icons/common/google.svg"></span>
              <span class="btn-inner--text">Google</span>
            </a>
          </div>
        </div>
        <div class="card-body px-lg-5 py-lg-5">
          <div class="text-center text-muted mb-4">
            <small>Or sign up with credentials</small>
          </div>
          <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-group">
              <div class="input-group input-group-alternative mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                </div>
                <input class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Name" type="text" value="{{ old('name') }}" required autocomplete="name" autofocus>

                  @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>
            </div>

            <div class="form-group">
              <div class="input-group input-group-alternative mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                </div>
                <input class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" type="email" value="{{ old('email') }}" required autocomplete="name">

                @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>

            <div class="form-group">
                <div class="input-group input-group-alternative mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                  </div>
                  <input class="form-control @error('username') is-invalid @enderror" name="username" placeholder="Username" type="text" value="{{ old('username') }}" required autocomplete="username">
  
                    @error('username')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <div class="input-group input-group-alternative mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-map-big"></i></span>
                  </div>
                  <textarea class="form-control form-control-alternative @error('address') is-invalid @enderror" name="address" rows="3" placeholder="Address" required autocomplete="address">{{ old('address') }}</textarea>

                    @error('address')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <div class="input-group input-group-alternative mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-mobile-button"></i></span>
                  </div>
                  <input class="form-control @error('phone') is-invalid @enderror" name="phone" placeholder="phone" type="text" value="{{ old('phone') }}" required autocomplete="phone">
  
                    @error('phone')
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
                <input class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" type="password" required autocomplete="password">

                @error('password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>

            <div class="row my-4">
              <div class="col-12">
                <div class="custom-control custom-control-alternative custom-checkbox">
                  <input class="custom-control-input" id="customCheckRegister" type="checkbox">

                  <label class="custom-control-label" for="customCheckRegister">
                    <span class="text-muted">I agree with the <a href="#!">Privacy Policy</a></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-primary mt-4">{{ __('Register') }}</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection