<x-guest-layout>

    <div class="container d-flex-columns justify-content-center mt-3 mb-2">
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('Obrigado por inscrever-se! Antes de começar, você poderia verificar seu endereço de e-mail clicando no link que acabamos de enviar para você? Não recebeu o e-mail, teremos prazer em lhe enviar outro.') }}
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
            {{ __('Um novo link de verificação foi enviado para o endereço de e-mail que você forneceu durante o registro.') }}
        </div>
    @endif

    <div class="mt-4 flex items-center justify-between">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <div>
                <x-primary-button>
                    {{ __('Resend Verification Email') }}
                </x-primary-button>
            </div>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit" class="btn btn-primary mt-2">
                {{ __('Log Out') }}
            </button>
        </form>
    </div>
</div>
</x-guest-layout>
