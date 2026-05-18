<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
<div class="mt-6 flex flex-col space-y-4">
            
            <x-primary-button class="w-full justify-center py-2.5 text-sm bg-blue-600 hover:bg-blue-700 active:bg-blue-800 focus:ring-blue-500 shadow-md shadow-blue-200">
                {{ __('Masuk Aplikasi') }}
            </x-primary-button>

            <hr class="border-slate-100">

            <div class="flex flex-col sm:flex-row items-center justify-between gap-2 text-sm">
                @if (Route::has('password.request'))
                    <a class="underline text-xs text-slate-400 hover:text-slate-600 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Lupa password?') }}
                    </a>
                @endif

                <div class="text-xs text-slate-500">
                    Belum punya akun? 
                    <a class="font-bold text-blue-600 hover:text-blue-800 underline ml-1" href="{{ route('register') }}">
                        Daftar di sini
                    </a>
                </div>
            </div>

        </div>
    </form>
</x-guest-layout>
