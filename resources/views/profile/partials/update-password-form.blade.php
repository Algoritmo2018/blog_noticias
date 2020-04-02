<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Update Password') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>

    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div class="form-floating">

            <div class="col-md-12 mb-3">
                <x-input-label for="update_password_current_password" :value="__('Current Password')" />
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupPrepend2"><i class="bi-key"
                                style="font-size: 24px; line-height: 24px;"></i></span>
                    </div>
                    <x-text-input id="update_password_current_password" name="current_password" type="password"
                        class="form-control" autocomplete="current-password" />
                </div>
                <div class="col-12" style="color: rgb(161, 8, 8)">
                    <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
                </div>
            </div>
            <div class="col-md-12 mb-3">
                <x-input-label for="update_password_password" :value="__('New Password')" />
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupPrepend2"><i class="bi-key"
                                style="font-size: 24px; line-height: 24px;"></i></span>
                    </div>
                <x-text-input id="update_password_password" name="password" type="password" class="form-control"
                    autocomplete="new-password" /> </div>
                    <div class="col-12" style="color: rgb(161, 8, 8)">
                <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
            </div>
        </div>
            <div class="col-md-12 mb-3">
                <x-input-label for="update_password_password_confirmation" :value="__('Confirm Password')" />
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupPrepend2"><i class="bi-key"
                                style="font-size: 24px; line-height: 24px;"></i></span>
                    </div>
                <x-text-input id="update_password_password_confirmation" name="password_confirmation" type="password"
                    class="form-control" autocomplete="new-password" />
                </div>
                    <div class="col-12" style="color: rgb(161, 8, 8)">
                <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
            </div> </div>

        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'password-updated')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                    class="text-success mt-2">{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
