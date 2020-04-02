<x-guest-layout>
    <div class="container d-flex justify-content-center mt-3 mb-2">

    <form method="POST" action="{{ route('password.store') }}">

        <div class="form-floating">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <div class="col-md-12 mb-3">
            <x-input-label for="email" :value="__('Email')" />
            <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroupPrepend2">@</span>
                </div>
            <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" /></div>
                <div class="col-12" style="color: rgb(161, 8, 8)">
            <x-input-error :messages="$errors->get('email')" class="mt-1" /></div>
        </div>

        <!-- Password -->
        <div class="col-md-12 mb-3">
            <x-input-label for="password" :value="__('Password')" />
            <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroupPrepend2"><i class="bi-key" style="font-size: 24px; line-height: 24px;"></i></span>
                </div>
            <x-text-input id="password" class="form-control" type="password" name="password" required autocomplete="new-password" /> </div>
            <div class="col-12" style="color: rgb(161, 8, 8)">
            <x-input-error :messages="$errors->get('password')" class="mt-1" />
            </div>   </div>

        <!-- Confirm Password -->
        <div class="col-md-12 mb-3">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
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
        </div>  </div>
    </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Reset Password') }}
            </x-primary-button>
        </div>
    </form></div>
</x-guest-layout>
