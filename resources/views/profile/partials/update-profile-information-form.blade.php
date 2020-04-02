<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Update your account's profile information and email address.") }}
        </p>


    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">

        <div class="form-floating">
        @csrf
        @method('patch')

        <div class="col-md-12 mb-3">
            <x-input-label for="name" :value="__('Name')" />
            <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroupPrepend2">N</span>
                </div>
            <x-text-input id="name" name="name" type="text" class="form-control" :value="old('name', $user->name)" required autofocus autocomplete="name" /></div>

        <div class="col-12" style="color: rgb(161, 8, 8)">
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div> </div>

        <div class="col-md-12 mb-3">
            <x-input-label for="email" :value="__('Email')" />
            <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroupPrepend2">@</span>
                </div>
            <x-text-input id="email" name="email" type="email" class="form-control" :value="old('email', $user->email)" required autocomplete="username" /></div>
        <div class="col-12" style="color: rgb(161, 8, 8)">
            <x-input-error class="mt-2" :messages="$errors->get('email')" />
            </div> </div>
            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800 dark:text-gray-200">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" class="">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-success mt-1"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
