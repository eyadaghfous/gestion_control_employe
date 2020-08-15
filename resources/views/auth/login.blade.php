@extends('layouts.app')

@section('content')

                        <h3>Sign In to Project</h3>
                        <p>Happy to see you again!</p>
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                <i class="ik ik-user"></i>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="password" id="password"  name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" required autocomplete="current-password">
                                <i class="ik ik-lock"></i>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="row">
                                <div class="col text-left">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" name="remember" id="item_checkbox " {{ old('remember') ? 'checked' : '' }} >
                                        <span class="custom-control-label">&nbsp; {{ __('Remember Me') }}</span>
                                    </label>
                                </div>
                                <div class="col text-right">
                                    @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}"> {{ __('Forgot Your Password?') }}</a>
                                    @endif
                                </div>
                            </div>
                            <div class="sign-btn text-center">
                                <button class="btn btn-theme" type="submit"> {{ __('Sign In') }}</button>
                            </div>
                        </form>
                        <div class="register">
                            <p>Don't have an account? <a href="{{ route('register') }}">Create an account</a></p>
                        </div>
@endsection
