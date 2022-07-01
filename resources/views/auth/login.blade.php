@extends('layouts.app')

@section('content')
<section class="vh-100" style="background-color: #508bfc;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">
          <form method="POST" action="{{ route('login') }}">
                        @csrf

            <h3 class="mb-5">{{ __('Login') }}</h3>

            <div class="form-outline mb-4">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                <label class="form-label" for="typeEmailX-2">{{ __('Email Address') }}</label>
              @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-outline mb-4">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            <label class="form-label" for="typePasswordX-2">{{ __('Password') }}</label>
              
              @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            </div>

            <button class="btn btn-primary btn-lg btn-block" type="submit">{{ __('Login') }}</button>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
