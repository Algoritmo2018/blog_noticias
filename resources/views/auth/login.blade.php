
<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <div class="container d-flex justify-content-center mt-3 mb-2">
    <form method="POST" action="{{ route('login') }}">
        <h1>Insira os seus dados, para iniciar sessão</h1>
        <hr class="mb-3">
        <div class="form-floating">

        @csrf

        <!-- Email Address -->
        <div class="col-md-12 mb-3">

            <x-input-label for="email" :value="__('Email')" />
            <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroupPrepend2">@</span>
                </div>
            <x-text-input id="email" class="form-control" type="email" name="email" aria-describedby="inputGroupPrepend2"  :value="old('email')" required autofocus autocomplete="username" />
            <div class="col-12" style="color: rgb(161, 8, 8)">
            <x-input-error :messages="$errors->get('email')"  />
            </div>
        </div>  </div>

        <!-- Password -->
        <div class="col-md-12 mb-3">
            <x-input-label for="password" :value="__('Password')" />
            <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroupPrepend2"><i class="bi-key" style="font-size: 24px; line-height: 24px;"></i></span>
                </div>
            <x-text-input id="password" class="form-control" aria-describedby="inputGroupPrepend2"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />
                            <div class="col-12" style="color: rgb(161, 8, 8)">
            <x-input-error :messages="$errors->get('password')"  /></div>
        </div></div>
    </div>


        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Lembrar-me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Esqueceu sua senha?') }}
                </a>
            @endif

            <x-primary-button class="btn btn-primary ms-2">
                {{ __('Entrar') }}
            </x-primary-button>
        </div>
    </form>
</div>
</x-guest-layout>
