@extends('layouts.app')

@section('content')
    <!--content-->
    <section class="content center full-width">
        <div class="modal container">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <h3>Register</h3>
                <div class="f-row">
                    <input id="name" placeholder="Enter your name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="f-row">
                    <input id="email" placeholder="Enter your email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="f-row">
                    <input id="password" placeholder="Enter your password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="f-row">
                    <input id="password-confirm" placeholder="Re-enter your password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>

                <div class="f-row bwrap">
                    <input type="submit" value="register" />
                </div>
            </form>
            <p>Already have an account yet? <a href="{{ route('login') }}">Log in.</a></p>
        </div>
    </section>
    <!--//content-->
@endsection
