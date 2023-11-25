<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

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

        <!-- User Role -->
        {{-- <div class="mt-4">
            <label for="role" class="block font-medium text-gray-700">User Role</label>
            <select name="role" id="role" class="form-select mt-1 block w-full">
                <option value="user">User</option>
                <option value="admin">Admin</option>
            </select>
        </div> --}}

        <!-- Additional text box for admin code -->
        {{-- <div id="adminCode" class="mt-4 hidden">
            <label for="adminCode" class="block font-medium text-gray-700">Admin Code</label>
                <div class="mb-4 text-sm text-gray-600">
                    {{ __('*This is to confirm your identification.') }}
                </div>
            <input type="password" name="adminCode" id="adminCode" class="block w-full mt-1 rounded">
        </div>

        <script>
            // Show/hide admin extra field based on role selection
            const roleSelect = document.getElementById('role');
            const adminExtra = document.getElementById('adminCode');
            roleSelect.addEventListener('change', () => {
                if (roleSelect.value === 'admin') {
                    adminExtra.classList.remove('hidden');
                } else {
                    adminExtra.classList.add('hidden');
                }
            });
        </script> --}}

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
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
