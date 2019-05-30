@extends('layouts.my')

@section('content')
<div class="container">

      <h1>{{ __('Register') }}</h1>

        <div class="register-container">
          <form method="POST" action="{{ route('register') }}">
              @csrf

                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus placeholder="name">

                @if ($errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif

                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required placeholder="E-Mail Address">

                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif

                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Password">

                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif

              <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Confirm Password">

              <button type="submit" class="btn resister">
                  {{ __('Register') }}
              </button>
        </form>
    </div>
</div>
@endsection
