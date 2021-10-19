<div>

    <div class="flex flex-col lg:flex-row lg:items-stretch w-auto select-none justify-end">

        <!-- Item search sector-->
        <div class="w-full lg:w-3/4 flex flex-col lg:flex-row items-end lg:items-center justify-end">

            <!-- Search button-->
            <div class="group bg-white flex items-center rounded-lg border border-gray-300 focus:border-gray-500 w-1/2">
                <label for="search"></label>
                <input wire:model="search"
                       class="flex-grow rounded-l-lg border-none focus:outline-none focus:ring-transparent rounded-md shadow-sm"
                       id="search" type="text" placeholder="Search customer by name...">
            </div>
        </div>

    </div>

    <x-admin.section-border/>

    <!-- Delete Button and Show Entries -->

    <div class="flex flex-col lg:flex-row justify-between items-start lg:items-stretch w-full mb-4">
        <!-- Delete button -->
        <x-admin.manager.delete-item/>

        <!-- Show entries -->
        <div class="w-full lg:w-2/3 flex flex-col lg:flex-row items-start lg:items-center justify-end">
            <p class="text-sm font-medium">Show</p>
            <input wire:model="entry" class="px-2 py-0.5 w-1/12 border border-gray-800 mx-2 rounded-lg text-center"
                   type="text" max="10" min="1" value="10">
            <p class="text-sm font-medium">entries</p>
        </div>

    </div>

    <div class="flex-col space-y-4">
        <!-- Table -->
        <div class="w-full overflow-auto bg-white xl:overflow-x-hidden z-10 rounded-2xl shadow-xl">
            <x-admin.table>
                <x-slot name="heading">
                    <x-admin.table.heading wire:click="sortBy('username')"
                                           :direction="$sortField === 'username' ? $sortDirection : null" sortable>NAME
                    </x-admin.table.heading>
                    <x-admin.table.heading>IMAGE</x-admin.table.heading>
                    <x-admin.table.heading wire:click="sortBy('gender')"
                                           :direction="$sortField === 'gender' ? $sortDirection : null" sortable>TYPE
                    </x-admin.table.heading>
                    <x-admin.table.heading></x-admin.table.heading>
                </x-slot>

                <x-slot name="body">

                    @forelse ($products as $product)
                        <div>

                            <x-admin.table.row wire:loading.class="opacity-50" class="hover:bg-gray-100">
                                <x-admin.table.cell>{{ $product->product->name }}</x-admin.table.cell>
                                <x-admin.table.cell>
                                    <div class="">
                                        <img style="width: 150px; height: 160px" src="{{ $product->image }}"
                                             alt="null"/>
                                    </div>
                                </x-admin.table.cell>
                                <x-admin.table.cell
                                    class="select-none">{{ $product->product->sub_category->category->type }}</x-admin.table.cell>
                                <x-admin.table.cell class="select-none">
                                    <div class="flex justify-center space-x-4">
                                        <a href="{{ route('product-update', ['id' => $product]) }}">
                                            <i class="fas fa-edit text-gray-500 "></i>
                                        </a>

                                    </div>
                                </x-admin.table.cell>
                            </x-admin.table.row>
                        </div>
                    @empty
                        <x-admin.table.row>
                            <x-admin.table.cell colspan="4">
                                <div class="flex justify-center items-center">
                                    <span class="font-medium py-8 text-gray-400 text-xl">No customer found ...</span>
                                </div>
                            </x-admin.table.cell>
                        </x-admin.table.row>
                    @endforelse

                </x-slot>

            </x-admin.table>
        </div>
        <div class="select-none">
            {{ $products->links() }}
        </div>

    </div>
</div>
