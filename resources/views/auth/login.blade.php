@extends('layouts.app')

@section('body')
<div class="container register h-screen" style="background-image: linear-gradient(to right, #fa709a 0%, #fee140 100%); margin:0px !important;">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="images/control.svg" alt=""/>
                        <h3>Welcome back</h3>
                        <p>You can login here as client or hotel owner!</p>
                        <a href="{{route('register')}}" class="bg-white rounded p-2 text-blue-700">Register</a><br/>
                    </div>
                    <div class="col-md-9 register-right pt-5" style="background:inherit">

                        <div class="card w-3/4  mx-auto p-5" id="myTabContent">
                          <div class="spacer h-10"></div>
                          <form method="POST" action="{{ route('login') }}">
                              @csrf

                              <div class="form-group row">
                                  <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                  <div class="col-md-6">
                                      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                      @error('email')
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $message }}</strong>
                                          </span>
                                      @enderror
                                  </div>
                              </div>

                              <div class="form-group row">
                                  <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                  <div class="col-md-6">
                                      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                      @error('password')
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $message }}</strong>
                                          </span>
                                      @enderror
                                  </div>
                              </div>

                              <div class="form-group row">
                                  <div class="col-md-6 offset-md-4">
                                      <div class="form-check">
                                          <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                          <label class="form-check-label" for="remember">
                                              {{ __('Remember Me') }}
                                          </label>
                                      </div>
                                  </div>
                              </div>

                              <div class="form-group row mb-0">
                                  <div class="col-md-8 offset-md-4">
                                      <button type="submit" class="btn btn-primary">
                                          {{ __('Login') }}
                                      </button>

                                      @if (Route::has('password.request'))
                                          <a class="btn btn-link" href="{{ route('password.request') }}">
                                              {{ __('Forgot Your Password?') }}
                                          </a>
                                      @endif
                                  </div>
                              </div>
                          </form>

                              <div class="spacer h-10"></div>

                      </div>
                    </div>
                </div>

            </div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
