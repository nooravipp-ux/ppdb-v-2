@extends('layouts.app')
@section('title', 'PPDB-Login')
@section('content')
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-form-title" style="background-image: url(login-ui/images/bg-01.jpg);">
                <span class="login100-form-title-1">
                    PPDB ONLINE
                </span>
            </div>

            <form method="POST" action="{{ route('login') }}" id="examineeLoginFrm" class="login100-form validate-form">
                @csrf
                <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
                    <span class="label-input100">Email</span>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror input100" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input m-b-18" data-validate="Password is required">
                    <span class="label-input100">Password</span>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror input100" name="password" required autocomplete="current-password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <span class="focus-input100"></span>
                </div>


                <div class="container-login100-form-btn" align="right">
                    <button type="submit" class="login100-form-btn">
                        Login
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection