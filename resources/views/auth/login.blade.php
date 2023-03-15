@component('layouts.custom')
<div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block" style="background-image: url('images/login.png'); background-position: center; background-size: cover;"></div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">¡Bienvenido de Nuevo!</h1>
                                </div>

                                <x-jet-validation-errors class="mb-3 rounded-0" />

                                @if (session('status'))
                                    <div class="alert alert-success mb-3 rounded-0" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif

                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    {{-- Email de usuario --}}
                                    <div class="form-group">
                                        <x-jet-label value="{{ __('Email') }}" />

                                        <x-jet-input class="{{ $errors->has('email') ? 'is-invalid' : '' }}" type="email"
                                                    name="email" :value="old('email')" required />
                                        <x-jet-input-error for="email"></x-jet-input-error>
                                    </div>

                                    {{-- Contraseña de usuario --}}
                                    <div class="form-group">
                                        <x-jet-label value="{{ __('Password') }}" />

                                        <x-jet-input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password"
                                                    name="password" required autocomplete="current-password" />
                                        <x-jet-input-error for="password"></x-jet-input-error>
                                    </div>

                                    {{-- Recordarme --}}
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                            <input type="checkbox" class="custom-control-input" id="remember_me" name="remember">
                                            <label class="custom-control-label" for="remember_me">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>

                                    <button class="btn btn-primary btn-user btn-block" type="submit">
                                        {{ __('Log in') }}
                                    </button>
                                </form>

                                <hr>
                                <div class="text-center">
                                    @if (Route::has('password.request'))
                                        <a class="text-muted me-3" href="{{ route('password.request') }}">
                                            {{ __('Forgot your password?') }}
                                        </a>
                                    @endif
                                </div>
                                <div class="text-center">
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="text-muted me-3">
                                            {{ __('Register')}}
                                        </a>
                                    @endif
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