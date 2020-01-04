@extends('layouts.app')

@section('content')
            <!--content-->
            <section class="content center full-width">
                <div class="modal container">
                    <h3>Login</h3>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="f-row">

                            <div class="col-md-6">
                                <input id="email" placeholder="Enter your email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="f-row">

                            <div class="col-md-6">
                                <input id="password" placeholder="Enter your password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="f-row">
                            <input type="checkbox" />
                            <label>Remember me next time</label>
                        </div>

                        <div class="f-row bwrap">
                            <input type="submit" value="login" />
                        </div>
                        <p><a href="#">Forgotten password?</a></p>
                        <p>Dont have an account yet? <a href="{{ route('register') }}">Sign up.</a></p>

                    </form>
                </div>
            </section>
            <!--//content-->
@endsection
