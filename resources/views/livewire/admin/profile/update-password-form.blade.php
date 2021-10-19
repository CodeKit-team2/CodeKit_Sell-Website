{{--<x-admin.profile.form.form-section submit="updatePassword">--}}
{{--    <x-slot name="title">--}}
{{--        {{ __('Update Password') }}--}}
{{--    </x-slot>--}}

{{--    <x-slot name="description">--}}
{{--        {{ __('Ensure your account is using a long, random password to stay secure.') }}--}}
{{--    </x-slot>--}}

{{--    <x-slot name="form">--}}
{{--        <div class="col-span-6 sm:col-span-4">--}}
{{--            <x-admin.label for="current_password" value="{{ __('Current Password') }}" />--}}
{{--            <x-admin.input id="current_password" type="password" class="mt-1 block w-full" wire:model.defer="state.current_password" autocomplete="current-password" />--}}
{{--            <x-admin.input-error for="current_password" class="mt-2" />--}}
{{--        </div>--}}

{{--        <div class="col-span-6 sm:col-span-4">--}}
{{--            <x-admin.label for="password" value="{{ __('New Password') }}" />--}}
{{--            <x-admin.input id="password" type="password" class="mt-1 block w-full" wire:model.defer="state.password" autocomplete="new-password" />--}}
{{--            <x-admin.input-error for="password" class="mt-2" />--}}
{{--        </div>--}}

{{--        <div class="col-span-6 sm:col-span-4">--}}
{{--            <x-admin.label for="password_confirmation" value="{{ __('Confirm Password') }}" />--}}
{{--            <x-admin.input id="password_confirmation" type="password" class="mt-1 block w-full" wire:model.defer="state.password_confirmation" autocomplete="new-password" />--}}
{{--            <x-admin.input-error for="password_confirmation" class="mt-2" />--}}
{{--        </div>--}}
{{--    </x-slot>--}}

{{--    <x-slot name="actions">--}}
{{--        <x-admin.action-message class="mr-3" on="saved">--}}
{{--            {{ __('Saved.') }}--}}
{{--        </x-admin.action-message>--}}

{{--        <x-admin.button>--}}
{{--            {{ __('Save') }}--}}
{{--        </x-admin.button>--}}
{{--    </x-slot>--}}
{{--</x-admin.profile.form.form-section>--}}


<div class = "md:grid md:grid-cols-3 md:gap-6">
    <x-admin.profile.form.section-title>
        <x-slot name="title">{{ __('Update Password') }}</x-slot>
        <x-slot name="description">{{ __('Ensure your account is using a long, random password to stay secure.') }}</x-slot>
    </x-admin.profile.form.section-title>

    <div class="mt-5 md:mt-0 md:col-span-2">
        <form action="{{ route('profile.updatePass') }}" method="POST">
            @csrf
            @method('PATCH')

            <div class="px-4 py-5 bg-white sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md">
                <div class="grid grid-cols-6 gap-6">
                    @if (Session::has('pass_error'))
                        <p class="mr-4 text-red-600 col-span-6 sm:col-span-4">{{ Session::get('pass_error') }}</p>
                    @endif
                    @if (Session::has('pass-update-success-message'))
                        <p class="mr-4 text-green-600 col-span-6 sm:col-span-4">{{ Session::get('pass-update-success-message') }}</p>
                    @endif
                    <div class="col-span-6 sm:col-span-4">
                        <x-admin.label for="current_password" value="{{ __('Current Password') }}" />
                        <input id="current_password" name="current_password" type="password" wire:model.defer="state.current_password" autocomplete="current-password" class="mt-1 block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                        <x-admin.input-error for="current_password" class="mt-2" />
                    </div>

                    <div class="col-span-6 sm:col-span-4">
                        <x-admin.label for="password" value="{{ __('New Password') }}" />
                        <input id="password" name="password" type="password" wire:model.defer="state.password" autocomplete="new-password" class="mt-1 block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                        <x-admin.input-error for="password" class="mt-2" />
                    </div>

                    <div class="col-span-6 sm:col-span-4">
                        <x-admin.label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                        <input id="password_confirmation" name="password_confirmation" type="password" wire:model.defer="state.password_confirmation" autocomplete="new-password" class="mt-1 block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                        <x-admin.input-error for="password_confirmation" class="mt-2" />
                    </div>
                </div>
            </div>

            <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md">
                @if (Session::has('update-success-message'))
                    <p class="mr-4 text-green-600">{{ Session::get('update-success-message') }}</p>
                @endif
                <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
                    {{ __('Save') }}
                </button>
            </div>
        </form>
    </div>
</div>
