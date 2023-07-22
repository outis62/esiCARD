<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <img src="{{ asset('images/esi.jpg') }}" width="130" class="logoesiregister" height="130" alt="LogoESI">
        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        <!-- Role -->
        <div class="mt-4">
    <label class="col-md-4 control-label" for="">Role</label>
    <div class="col-md-4">
    <select name="role" class="form-control input-md">
        <option value="">Sélectionner le role</option>
        <option value="directeur" {{ old('role') == 'directeur' ? 'selected' : '' }}>Directeur</option>
        <option value="secretaire" {{ old('role') == 'secretaire' ? 'selected' : '' }}>Secretaire</option>
    </select>
    </div>
</div>
        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Enregistrer') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
