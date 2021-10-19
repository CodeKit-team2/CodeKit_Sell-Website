<x-guest-layout>
    <x-slot name="redirect">
        <p>
            <span class="mr-2">
                {{ __("Don't have an account?") }}
            </span>
            <a href="{{ route('register') }}">
                <span class="underline text-blue-900">
                    {{ __("Register") }}
                </span>
            </a>
        </p>
    </x-slot>
    <x-admin.auth.authentication-card>
        <x-slot name="logo">
            <x-admin.auth.authentication-card-logo />
        </x-slot>

        <x-admin.auth.validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login.store') }}">
            @csrf

            <div>
                <x-admin.label for="email" value="{{ __('Email') }}" />
                <x-admin.input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-admin.label for="password" value="{{ __('Password') }}" />
                <x-admin.input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-admin.auth.checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (1)
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-admin.button class="ml-4">
                    {{ __('Log in') }}
                </x-admin.button>
            </div>
        </form>
    </x-admin.auth.authentication-card>
</x-guest-layout>

