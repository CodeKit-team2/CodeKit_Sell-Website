<x-guest-layout>
    <x-slot name="redirect">
        <p>
            <span class="mr-2">
{{--                {{ __("Don't have an account?") }}--}}
                {{ __("Already have an account?") }}
            </span>
            <a href="{{ route('login.create') }}">
                <span class="underline text-blue-900">
                    {{ __("Login") }}
                </span>
            </a>
        </p>
    </x-slot>
    <x-admin.auth.authentication-card>
        <x-slot name="logo">
            <x-admin.auth.authentication-card-logo />
        </x-slot>

        <x-admin.auth.validation-errors class="mb-4" />
        <x-admin.auth.validation-success class="mb-4"/>

        <form method="POST" action="{{ route('register.store') }}">
            @csrf

            <div>
                <x-admin.label for="name" value="{{ __('Name') }}" />
                <x-admin.input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-admin.label for="email" value="{{ __('Email') }}" />
                <x-admin.input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-admin.label for="password" value="{{ __('Password') }}" />
                <x-admin.input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-admin.label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-admin.input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (0)
                <div class="mt-4">
                    <x-admin.label for="terms">
                        <div class="flex items-center">
                            <x-admin.auth.checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-admin.label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <x-admin.button class="ml-4">
                    {{ __('Register') }}
                </x-admin.button>
            </div>
        </form>
    </x-admin.auth.authentication-card>
</x-guest-layout>
