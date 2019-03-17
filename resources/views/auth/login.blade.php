@extends('layouts.master')

@section('content')
    <div class='row'>
        <div class='col-1-4'>
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <label for="email">{{ __('E-Mail Address') }}</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>

                <label for="password">{{ __('Password') }}</label>
                <input id="password" type="password" name="password" required>

                <input class="form-check-input" type="checkbox" name="remember"
                       id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                </label>


                <button type="submit" class="btn btn-primary">
                    {{ __('Login') }}
                </button>

                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
            </form>
        </div>
    </div>
@endsection