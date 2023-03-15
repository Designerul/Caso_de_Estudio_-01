@component('layouts.custom')
<div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block" style="background-image: url('images/password.png'); background-position: center; background-size: cover;"></div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-2">Recuperar contraseña</h1>
                                    <p class="mb-4">
                                        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                                    </p>
                                </div>

                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif

                                <form method="POST" action="/forgot-password">
                                    @csrf

                                    <div class="form-group">
                                        <x-jet-label value="{{ __('Email') }}" />
                                        <x-jet-input type="email" name="email" :value="old('email')" required autofocus />
                                    </div>

                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        {{ __('Email Password Reset Link') }}
                                    </button>

                                </form>

                                <hr>
                                <div class="text-center">
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="text-muted me-3">
                                            {{ __('Register')}}
                                        </a>
                                    @endif
                                </div>
                                <div class="text-center">
                                    <a class="text-muted me-3 text-decoration-none" href="{{ route('login') }}">
                                        {{ __('Already registered?') }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endcomponent

