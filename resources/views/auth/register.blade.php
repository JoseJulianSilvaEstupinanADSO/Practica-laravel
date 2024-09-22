<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Nombre del usuario -->
        <div>
            <x-input-label for="name" :value="__('Nombre')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" autofocus autocomplete="name" placeholder="Nombre completo" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email del usuario -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Correo electronico')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" autocomplete="username" placeholder="Correo electronico"/>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        {{-- Documento del usuario --}}
        <div class="mt-4">
            <x-input-label for="documento" :value="__('Documento')" />
            <x-text-input id="documento" class="block mt-1 w-full" type="text" name="documento" :value="old('documento')" autocomplete="username" placeholder="Numero de documento"/>
            <x-input-error :messages="$errors->get('documento')" class="mt-2" />
        </div>

        {{-- Telefono del usuario --}}
        <div class="mt-4">
            <x-input-label for="telefono" :value="__('Telefono')" />
            <x-text-input id="telefono" class="block mt-1 w-full" type="text" name="telefono" :value="old('telefono')" autocomplete="username" placeholder="Numero de telefono" />
            <x-input-error :messages="$errors->get('telefono')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Contraseña')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            placeholder="Ingresar contraseña" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirmr Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirmar contraseña')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation"
                            placeholder="Confirma tu contraseña" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>


        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('¿Ya te encuentras registrado?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Registrar') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
