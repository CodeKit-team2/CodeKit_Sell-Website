<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Product Update') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg border border-gray-900 px-4 py-3">
                <div class="flex flex-row space-x-4">
                    {{--left big--}}
                    <div class="flex flex-col p-6 rounded-md border border-gray-800">
                        <div>
                            <img class="rounded-md" style="width: 300px; height: 380px"
                                 src="https://picsum.photos/id/237/300/320" alt="null"/>
                        </div>
                        <div class="flex flex-col py-2 mt-4">
                            <div class="flex flex-row justify-center space-x-12 w-full px-3">
                                <div class="flex flex-col">
                                    <label for="clor_input">Product's color</label>
                                    <select name="color" id="clor_input"
                                            class="flex-grow w-auto px-2 border border-gray-500 py-1 focus:ring-0 focus:outline-none rounded-md">
                                        <option value="red">Red</option>
                                        <option value="red">Blue</option>
                                        <option value="red">Black</option>
                                        <option value="red">Yellow</option>
                                    </select>
                                </div>


                                <div class="flex flex-col">
                                    <label for="size_input">Product's size</label>
                                    <select name="size" id="size_input"
                                            class="flex-grow w-auto px-2 border border-gray-500 py-1 focus:ring-0 focus:outline-none rounded-md">
                                        <option value="red">M</option>
                                        <option value="red">L</option>
                                        <option value="red">XL</option>
                                        <option value="red">XS</option>
                                    </select>
                                </div>
                            </div>

                            <div class="flex flex-row justify-center space-x-12 w-full px-6 mt-4">
                                <div class="relative z-0 flex-grow mb-5">
                                    <input type="text" name="name" placeholder=" " required
                                           class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200"/>
                                    <label for="name" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Enter
                                        name</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{--right big--}}
                    <div class="flex-grow p-6 rounded-md border border-gray-800 space-y-6">
                        {{--top--}}
                        <div class="flex flex-row bg-gray-800 p-3">
                            {{--left--}}
                            <div class="flex-grow">
                                <div class="relative z-0 flex-grow mb-5">
                                    <input type="text" name="name" placeholder=" " required
                                           class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200"/>
                                    <label for="name" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Enter name</label>
                                </div>

                                <div class="relative z-0 flex-grow mb-5">
                                    <input type="text" name="name" placeholder=" " required
                                           class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200"/>
                                    <label for="name" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Enter name</label>
                                </div>
                            </div>

                            {{--right--}}
                            <div class="flex-grow">
                                <div class="relative z-0 flex-grow mb-5">
                                    <label for="size_input">Product's size</label>
                                    <select name="size" id="size_input"
                                            class="flex-grow w-auto px-2 border border-gray-500 py-1 focus:ring-0 focus:outline-none rounded-md">
                                        <option value="red">M</option>
                                        <option value="red">L</option>
                                        <option value="red">XL</option>
                                        <option value="red">XS</option>
                                    </select>
                                </div>

                                <div class="relative z-0 flex-grow mb-5">
                                    <label for="size_input">Product's size</label>
                                    <select name="size" id="size_input"
                                            class="flex-grow w-auto px-2 border border-gray-500 py-1 focus:ring-0 focus:outline-none rounded-md">
                                        <option value="red">M</option>
                                        <option value="red">L</option>
                                        <option value="red">XL</option>
                                        <option value="red">XS</option>
                                    </select>
                                </div>

                                <div class="relative z-0 flex-grow mb-5">
                                    <label for="size_input">Product's size</label>
                                    <select name="size" id="size_input"
                                            class="flex-grow w-auto px-2 border border-gray-500 py-1 focus:ring-0 focus:outline-none rounded-md">
                                        <option value="red">M</option>
                                        <option value="red">L</option>
                                        <option value="red">XL</option>
                                        <option value="red">XS</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                        {{--down--}}
                        <div class="flex flex-col">

                            <label for="discription_input">Description</label>
                            <textarea name="discription" id="discription_input" class="w-full h-1/4 border border-gray-800"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<style>
    .-z-1 {
        z-index: -1;
    }

    .origin-0 {
        transform-origin: 0%;
    }

    input:focus ~ label,
    input:not(:placeholder-shown) ~ label,
    textarea:focus ~ label,
    textarea:not(:placeholder-shown) ~ label,
    select:focus ~ label,
    select:not([value='']):valid ~ label {
        /* @apply transform; scale-75; -translate-y-6; */
        --tw-translate-x: 0;
        --tw-translate-y: 0;
        --tw-rotate: 0;
        --tw-skew-x: 0;
        --tw-skew-y: 0;
        transform: translateX(var(--tw-translate-x)) translateY(var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
        --tw-scale-x: 0.75;
        --tw-scale-y: 0.75;
        --tw-translate-y: -1.5rem;
    }

    input:focus ~ label,
    select:focus ~ label {
        /* @apply text-black; left-0; */
        --tw-text-opacity: 1;
        color: rgba(0, 0, 0, var(--tw-text-opacity));
        left: 0px;
    }
</style>
