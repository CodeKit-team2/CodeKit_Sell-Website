<div class="md:grid md:grid-cols-3 md:gap-6">
    <x-admin.profile.form.section-title>
        <x-slot name="title">{{ __('Profile Information') }}</x-slot>
        <x-slot name="description">{{ __('Update your account\'s profile information and email address.') }}</x-slot>
    </x-admin.profile.form.section-title>

    <div class="mt-5 md:mt-0 md:col-span-2">
        <form action="{{ route('profile.updateInf') }}" method="POST">
            @csrf
            @method('PATCH')

            <div class="px-4 py-5 bg-white sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md">
                <div class="grid grid-cols-6 gap-6">
                    <!-- Name -->
                    <div class="col-span-6 sm:col-span-4">
                        <x-admin.label for="name" value="{{ __('Name') }}" />
                        <input id="name" name="name" type="text" wire:model.defer="state.name" autocomplete="name" class="mt-1 block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                        <x-admin.input-error for="name" class="mt-2" />
                    </div>

                    <!-- Email -->
                    <div class="col-span-6 sm:col-span-4">
                        <x-admin.label for="email" value="{{ __('Email') }}" />
                        <input id="email" name="email" type="text" wire:model.defer="state.email" autocomplete="email" class="mt-1 block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                        <x-admin.input-error for="email" class="mt-2" />
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
