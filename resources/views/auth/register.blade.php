@extends('layouts.app')

@section('content')
        <div class="row">
            <div class="col-md-4">
                <div class="card-header">{{ __('Register') }}</div>
                <br>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <h1>Register</h1>
                            <h4>Create a new account.</h4>
                            <hr />
                            <div class="form-group">
                                <label for="email">{{ __('E-Mail') }}</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                            </div>

                            <div class="form-group">
                                <label for="password">{{ __('Password') }}</label>

                                <h6 style="font-size:12px;">(Requires an uppercase letter, lowercase letter, special character, number and minimum length of 6 characters)</h6>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                            </div>
                            <div class="form-group">
                                <label for="password-confirm">{{ __('Confirm Password') }}</label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                            <button type="submit" class="btn btn-primary">
                                {{ __('Register') }}
                            </button>

                        </form>
            </div>
        </div>
@endsection
