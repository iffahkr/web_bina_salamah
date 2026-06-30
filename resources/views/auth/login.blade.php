<x-guest-layout>
    <h5 class="text-xl text-center mb-2 font-bold text-gray-800">Masuk sebagai Admin</h5>
    <p class="text-center mb-5 text-gray-600">Silakan masuk dengan akun admin yang telah terdaftar</p>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block w-full" type="email" name="email" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block  w-full"
                            type="password"
                            name="password"
                            required />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex flex-col items-center justify-end mt-4">
            <x-primary-button class="ms-3 px-35">
                {{ __('Log in') }}
            </x-primary-button>

            <div class="mt-3 flex flex-row">
                @if (Route::has('password.request'))
                <p class="text-sm text-gray-600">Don't have an account yet?</p>
                <a class="ml-1 underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ url('/register') }}">
                    Register here
                </a>
            @endif
            </div>
        </div>
    </form>
</x-guest-layout>
