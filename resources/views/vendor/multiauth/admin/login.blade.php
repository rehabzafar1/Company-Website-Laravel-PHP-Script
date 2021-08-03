    @extends('admin.layout.login-master')
    @section('content')
        <div class="wrapper wrapper-full-page">
            <div class="full-page login-page" filter-color="black" data-image="{{ asset('backend/assets/img/login.jpg') }}" style="background: url({{ asset('backend/assets/img/login.jpg') }});min-height: 100vh">
                <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
                <div class="content">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
                                <form method="POST" action="{{ route('admin.login') }}" aria-label="{{ __('Admin Login') }}">
                                    @csrf
                                    <div class="card card-login">
                                        <div class="card-header text-center" data-background-color="rose">
                                            <h4 class="card-title">{{ ucfirst(config('multiauth.prefix')) }} Login</h4>
                                        </div>
                                        <div class="card-content">
                                            <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">email</i>
                                            </span>
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Email address</label>
                                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}"
                                                           required autofocus> @if ($errors->has('email'))
                                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span> @endif
                                                </div>
                                            </div>

                                            <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">lock_outline</i>
                                            </span>
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Password</label>
                                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"
                                                           required> @if ($errors->has('password'))
                                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span> @endif
                                                </div>
                                            </div>
                                        </div>

                                        <div class="footer text-center">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old( 'remember') ? 'checked' : '' }}>

                                                <label class="form-check-label" for="remember">
                                                    {{ __('Remember Me') }}
                                                </label>
                                            </div>
                                            <button type="submit" class="btn btn-rose btn-simple btn-wd btn-lg">{{ __('Login') }}</button>
                                            <a class="btn btn-link" href="{{ route('admin.password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
    @endsection

