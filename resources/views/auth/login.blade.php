<x-guest-layout>

    <x-authorization-heading title="Login" description="Glad to see you're back! Please enter your credentials to Enter"/>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div class="mt-7">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <div class="flex">
                <x-text-input
                    id="password"
                    class="block mt-1 w-full rounded-e-none" 
                    type="password"
                    name="password"
                    required
                    autocomplete="current-password"
                />
                <button
                    type="button"
                    id="password-addon"
                    class="password-toggle inline-flex items-center justify-center px-4 border border-default-400/40 bg-transparent rounded-e-md -ms-px focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500 mt-1"
                >
                    <i class="ti ti-eye password-eye-on text-xl text-default-900"></i>
                    <i class="ti ti-eye-off password-eye-off text-xl text-default-900 hidden"></i>
                </button>
            </div>
        
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="flex justify-between items-center flex-wrap gap-x-1 gap-y-2 my-6">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="h-4 w-4 rounded border-default-400/80 bg-transparent text-primary focus:border-primary focus:ring focus:ring-primary/60 focus:ring-offset-0" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div>
            <x-primary-button class="mb-3">
                {{ __('Log in') }}
            </x-primary-button>

            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

        </div>
    </form>

    <x-account-prompt :linkRoute="route('register')"  message="Don't have an account?" linkText="Register" />
</x-guest-layout>
