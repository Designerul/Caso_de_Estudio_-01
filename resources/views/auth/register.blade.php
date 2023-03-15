@component('layouts.custom')
<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-5 d-none d-lg-block" style="background-image: url('images/register.png'); background-position: center; background-size: cover;"></div>
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">¡Crear una cuenta!</h1>
                        </div>

                        <x-jet-validation-errors class="mb-3" />

                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            {{-- Nombre registro --}}
                            <div class="form-group">
                                <x-jet-label value="{{ __('Name') }}" />
                                <x-jet-input class="{{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name"
                                            :value="old('name')" required autofocus autocomplete="name" />
                                <x-jet-input-error for="name"></x-jet-input-error>
                            </div>

                            {{-- Correo registro --}}
                            <div class="form-group">
                                <x-jet-label value="{{ __('Email') }}" />
                                <x-jet-input class="{{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email"
                                             :value="old('email')" required />
                                <x-jet-input-error for="email"></x-jet-input-error>
                            </div>

                            {{-- Contraseña registro --}}
                            <div class="form-group">
                                <x-jet-label value="{{ __('Password') }}" />
                                <x-jet-input class="{{ $errors->has('password') ? 'is-invalid' : '' }}" type="password"
                                            name="password" required autocomplete="new-password" />
                                <x-jet-input-error for="password"></x-jet-input-error>
                            </div>

                            {{-- Confirmar contraseña registro --}}
                            <div class="form-group">
                                <x-jet-label value="{{ __('Confirm Password') }}" />
                                <x-jet-input class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
                            </div>

                            {{-- Boton de registro --}}
                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                {{ __('Register') }}
                            </button>
                        </form>

                        <hr>
                        <a class="text-muted me-3 text-decoration-none" href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endcomponent