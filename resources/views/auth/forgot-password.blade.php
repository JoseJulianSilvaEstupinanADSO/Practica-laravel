<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('¿Has olvidado tu contraseña?, No te preocupes, ingresa tu correo electronico en el siguiente campo y enviarmes un mensaje de verificacion para hacer el restablecimiento de tu contraseña') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Correo electronico')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" autofocus placeholder="Correo electronico" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Restableces contraseña') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
