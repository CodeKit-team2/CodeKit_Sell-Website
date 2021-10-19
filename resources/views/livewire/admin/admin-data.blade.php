<div>
    <div class="flex flex-col lg:flex-row lg:items-stretch w-auto select-none justify-end">

        <!-- Item search sector-->
        <div class="w-full lg:w-3/4 flex flex-col lg:flex-row items-end lg:items-center justify-end">

            <!-- Search button-->
            <div class="group bg-white flex items-center rounded-lg border border-gray-300 focus:border-gray-500 w-1/2">
                <label for="search"></label>
                <input wire:model="search" class="flex-grow rounded-l-lg border-none focus:outline-none focus:ring-transparent rounded-md shadow-sm"
                       id="search" type="text" placeholder="Search admin by name...">
            </div>

            <!-- Add button-->
            <div class="flex items-center justify-end">
                <x-admin.button class="ml-4 space-y-1.5">
                    <i class="fas fa-plus mr-2"></i>
                    <p class="lowercase capitalize m-0" style="margin-top: 4px;">Add Admins </p>
                </x-admin.button>
            </div>

        </div>

    </div>

    <x-admin.section-border />

    <!-- Delete Button and Show Entries -->

    <div class="flex flex-col lg:flex-row justify-between items-start lg:items-stretch w-full mb-4">
        <!-- Delete button -->
        <x-admin.manager.delete-item/>

        <!-- Show entries -->
        <div wire:model="entry" class="w-full lg:w-2/3 flex flex-col lg:flex-row items-start lg:items-center justify-end">
            <p class="text-sm font-medium">Show</p>
                <input class="px-2 py-0.5 w-1/12 border border-gray-800 mx-2 rounded-lg text-center" type="number" max="10" min="1" value="10">
            <p class="text-sm font-medium">entries</p>
        </div>


    </div>

    <div class="flex-col space-y-4">
        <!-- Table -->
        <div class="w-full overflow-auto bg-white xl:overflow-x-hidden z-10 rounded-2xl shadow-xl">
            <x-admin.table>
                <x-slot name="heading">
                    <x-admin.table.heading wire:click="sortBy('name')" :direction="$sortField === 'name' ? $sortDirection : null" sortable>Name</x-admin.table.heading>
                    <x-admin.table.heading>Email</x-admin.table.heading>
                    <x-admin.table.heading wire:click="sortBy('status')" :direction="$sortField === 'status' ? $sortDirection : null"  sortable>Status</x-admin.table.heading>
                    <x-admin.table.heading wire:click="sortBy('created_at')" :direction="$sortField === 'created_at' ? $sortDirection : null"  sortable>Register Time</x-admin.table.heading>
                    <x-admin.table.heading></x-admin.table.heading>
                </x-slot>

                <x-slot name="body">

                    @forelse ($admins as $admin)

                        <x-admin.table.row wire:loading.class="opacity-50">
                            <x-admin.table.cell>{{ $admin->name }}</x-admin.table.cell>
                            <x-admin.table.cell>{{ $admin->email }}</x-admin.table.cell>
                            <x-admin.table.cell class="select-none">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium leading-4 bg-{{ $admin->getStatusColorAttribute() }}-100 text-{{ $admin->getStatusColorAttribute() }}-800 capitalize">
                                    {{ $admin->status }}
                                </span>
                            </x-admin.table.cell>
                            <x-admin.table.cell class="select-none">
                                {{ $admin->created_at->format('d/m/Y, H:i:s') }}
                            </x-admin.table.cell>

                            <x-admin.table.cell class="select-none">
                                <div class="flex justify-center space-x-4">
                                    @if($admin->status === 'verified')
                                        <button wire:click="ignore({{ $admin->id }})">
                                            <span class="material-icons-outlined text-yellow-500 hover:text-white hover:bg-yellow-500 hover:rounded-full">cancel</span>
                                        </button>

                                        <div x-data="{ show: false }">
                                            <div class="flex justify-center">
                                                <button @click={show=true} type="button" class="">
                                                    <span class="material-icons-outlined text-red-600 hover:text-white hover:bg-red-600 hover:rounded-full">remove_circle_outline</span>
                                                </Button>
                                            </div>
                                            <div x-show="show" tabindex="0" class="z-40 overflow-auto left-0 top-0 bottom-0 right-0 w-full h-full fixed">
                                                <div  @click.away="show = false" class="z-50 relative p-3 mx-auto my-0 max-w-full" style="width: 400px;">
                                                    <div class="bg-white rounded shadow-lg border flex flex-col overflow-hidden items-center">
                                                        <button @click={show=false} class="fill-current h-6 w-6 absolute right-0 top-0 m-6 font-3xl font-bold">&times;</button>
                                                        <div class="w-4/5 px-6 py-3 text-xl text-center border-b font-bold">Warning</div>
                                                        <div class="p-6 flex-grow">
                                                            <p>Do you want to remove this admin?</p>
                                                        </div>
                                                        <div class="w-4/5 px-6 py-3 border-t flex space-x-12 justify-center">
                                                            <button @click={show=false} type="button" class="bg-gray-700 text-gray-100 rounded px-4 py-2 mr-1">No</Button>
                                                            <button wire:click="delete({{ $admin->id }})" @click={show=false} class="bg-red-600 text-gray-200 rounded px-4 py-2">Yes</Button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="z-40 overflow-auto left-0 top-0 bottom-0 right-0 w-full h-full fixed bg-black opacity-50"></div>
                                            </div>
                                        </div>
                                    @elseif($admin->status === 'not_verified')
                                        <button wire:click="accept({{ $admin->id }})">
                                            <span class="material-icons-outlined text-green-600 hover:text-white hover:bg-green-600 hover:rounded-full">check_circle_outline</span>
                                        </button>

                                        <div x-data="{ show: false }">
                                            <div class="flex justify-center">
                                                <button @click={show=true} type="button" class="">
                                                    <span class="material-icons-outlined text-red-600 hover:text-white hover:bg-red-600 hover:rounded-full">remove_circle_outline</span>
                                                </Button>
                                            </div>
                                            <div x-show="show" tabindex="0" class="z-40 overflow-auto left-0 top-0 bottom-0 right-0 w-full h-full fixed">
                                                <div  @click.away="show = false" class="z-50 relative p-3 mx-auto my-0 max-w-full" style="width: 400px;">
                                                    <div class="bg-white rounded shadow-lg border flex flex-col overflow-hidden items-center">
                                                        <button @click={show=false} class="fill-current h-6 w-6 absolute right-0 top-0 m-6 font-3xl font-bold">&times;</button>
                                                        <div class="w-4/5 px-6 py-3 text-xl text-center border-b font-bold">Warning</div>
                                                        <div class="p-6 flex-grow">
                                                            <p>Do you want to remove this admin?</p>
                                                        </div>
                                                        <div class="w-4/5 px-6 py-3 border-t flex space-x-12 justify-center">
                                                            <button @click={show=false} type="button" class="bg-gray-700 text-gray-100 rounded px-4 py-2 mr-1">No</Button>
                                                            <button wire:click="delete({{ $admin->id }})" @click={show=false} class="bg-red-600 text-gray-200 rounded px-4 py-2">Yes</Button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="z-40 overflow-auto left-0 top-0 bottom-0 right-0 w-full h-full fixed bg-black opacity-50"></div>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </x-admin.table.cell>
                        </x-admin.table.row>

                    @empty
                        <x-admin.table.row>
                            <x-admin.table.cell colspan="5">
                                <div class="flex justify-center items-center">
                                    <span class="font-medium py-8 text-gray-400 text-xl">No admin found ...</span>
                                </div>
                            </x-admin.table.cell>
                        </x-admin.table.row>
                    @endforelse

                </x-slot>

            </x-admin.table>
        </div>

        {{ $admins->links() }}

    </div>
</div>
