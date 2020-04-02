<x-guest-layout>


    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="container d-flex-columns justify-content-center mt-3 mb-2">

        <div class="cols-12 mb-2">
            <small>
            {{ __('Esqueceu sua senha? sem problema. Basta informar-nos o seu endereço de e-mail e enviaremos por e-mail um link de redefinição de senha que permitirá que você escolha uma nova') }}</small>
        </div>

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div class="col-md-12 mb-3">
            <x-input-label for="email" :value="__('Email')" />
            <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroupPrepend2">@</span>
                </div>
            <x-text-input id="email" class="form-control"  type="email" name="email" aria-describedby="inputGroupPrepend2" :value="old('email')" required autofocus /></div>

        <div class="col-12" style="color: rgb(161, 8, 8)">
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form></div>
</x-guest-layout>
