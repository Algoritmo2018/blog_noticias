<x-guest-layout>
    <div class="container d-flex-columns justify-content-center mt-3 mb-2">

    <div class=>
        {{ __('Esta é uma área segura do aplicativo. Por favor confirme sua senha antes de continuar.') }}
    </div>

    <form method="POST" action="{{ route('password.confirm') }}">

        <div class="form-floating">
        @csrf

        <!-- Password -->
        <div class="col-md-12 mb-3">
            <x-input-label for="password" :value="__('Password')" />
            <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroupPrepend2"><i class="bi-key" style="font-size: 24px; line-height: 24px;"></i></span>
                </div>
            <x-text-input id="password" class="form-control"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />
                        </div>
                        <div class="col-12" style="color: rgb(161, 8, 8)">

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div> </div> </div>

        <div class="flex justify-end mt-4">
            <x-primary-button>
                {{ __('Confirm') }}
            </x-primary-button>
        </div>
    </form></div>
</x-guest-layout>
