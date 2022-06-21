@extends('layouts.app')

@section('content')

<div class="authorization_block_position">
    <div class="authorization_block">
    <form method="POST" action="{{ route('login') }}">
        @csrf
            <label for="email" class="">{{ __('Логин:') }}</label>
            <br>
                <input id="email" type="text" class="authorization_block_input @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="email" autofocus>

            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <br>
            <label for="password" class="">{{ __('Пароль:') }}</label>
            <br>

                <input id="password" type="password" class="authorization_block_input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

{{--        <div class="row mb-3">--}}
{{--            <div class="col-md-6 offset-md-4">--}}
{{--                <div class="form-check">--}}
{{--                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

{{--                    <label class="form-check-label" for="remember">--}}
{{--                        {{ __('Remember Me') }}--}}
{{--                    </label>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

            <button type="submit" class="authorization_block_submit">
                {{ __('Войти') }}
            </button>
            <br>

{{--            @if (Route::has('password.request'))--}}
{{--                <a class="" href="{{ route('password.request') }}">--}}
{{--                    {{ __('Forgot Your Password?') }}--}}
{{--                </a>--}}
{{--            @endif--}}
    </form>
    </div>
</div>
@endsection
