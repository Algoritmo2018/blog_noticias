<x-guest-layout>
    <div class="container d-flex justify-content-center mt-3 mb-2">

    <form method="POST" action="{{ route('register') }}">
        <h1>Insira os seus dados, por favor</h1>
        <hr class="mb-3">
        <div class="form-floating">

        @csrf

        <!-- Name -->
        <div class="col-md-12 mb-3">
            <x-input-label for="name" :value="__('Nome')" />
            <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroupPrepend2">N</span>
                </div>
            <x-text-input id="name" class="form-control" type="text" name="name" aria-describedby="inputGroupPrepend2" :value="old('name')" required autofocus autocomplete="name" />
        </div>
        <div class="col-12" style="color: rgb(161, 8, 8)">
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>  </div>

        <!-- Email Address -->
        <div class="col-md-12 mb-3">
            <x-input-label for="email" :value="__('Email')" />
            <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroupPrepend2">@</span>
                </div>
            <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autocomplete="username" /> </div>

        <div class="col-12" style="color: rgb(161, 8, 8)">
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
        </div>

        <!-- Tipo de usuario -->
        <div class="input-group mb-3">
            <div class="input-group-prepend">
              <label class="input-group-text" for="inputGroupSelect01">Adm</label>
            </div>
            <select class="form-select  col-md-12 rounded-2" id="inputGroupSelect01" name="is_admin">

                <option value="0">Não</option>
              <option value="1">Sim</option>

            </select>
          </div>

        <!-- Password -->
        <div class="col-md-12 mb-3">
            <x-input-label for="password" :value="__('Senha')" />
            <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroupPrepend2"><i class="bi-key" style="font-size: 24px; line-height: 24px;"></i></span>
                </div>
            <x-text-input id="password" class="form-control"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />
                        </div>

        <div class="col-12" style="color: rgb(161, 8, 8)">
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>
    </div>
        <!-- Confirm Password -->
        <div class="col-md-12 mb-3">
            <x-input-label for="password_confirmation" :value="__('Confirmar senha')" />
            <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroupPrepend2"><i class="bi-key" style="font-size: 24px; line-height: 24px;"></i></span>
                </div>
            <x-text-input id="password_confirmation" class="form-control"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />
                        </div>

        <div class="col-12" style="color: rgb(161, 8, 8)">
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div></div>
    </div>
        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Eu já tenho uma conta.
                ') }}
            </a>

            <x-primary-button class="btn btn-primary ms-1">
                {{ __('Guardar') }}
            </x-primary-button>
        </div>
    </form></div>
</x-guest-layout>
