<!-- Manager header -->
<div class="flex flex-col lg:flex-row lg:items-stretch w-auto select-none justify-end">

    <!-- Item search sector-->
    <div class="w-full lg:w-3/4 flex flex-col lg:flex-row items-end lg:items-center justify-end">

        <!-- Search button-->
        <div class="group bg-white flex items-center rounded-lg border border-gray-300 focus:border-gray-500 w-1/2">
            <label for="search"></label>
            <input class="flex-grow rounded-l-lg border-none focus:outline-none focus:ring-transparent rounded-md shadow-sm"
                                               id="search" type="text" placeholder="Search">
            <button
                class="bg-gray-700 text-white rounded-lg p-2 active:bg-gray-700 focus:outline-none
                w-8 h-8 flex items-center justify-center mr-2">
                <i class="fas fa-search"></i>
            </button>
        </div>

        <!-- Add button-->
        <div class="flex items-center justify-end">
            <x-admin.button class="ml-4 space-y-1.5">
                <i class="fas fa-plus mr-2"></i>
                <p class="lowercase capitalize m-0" style="margin-top: 4px;">Add {{ $items }} </p>
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
    <x-admin.manager.show-entry/>

</div>

<div class="flex-col space-y-4">
    <!-- Table -->
    <div class="w-full overflow-auto bg-white xl:overflow-x-hidden z-10 rounded-2xl shadow-xl">
        {{ $slot }}
    </div>
</div>

