<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Shop') }}
        </h2>
    </x-slot>
    <p class="mx-auto w-10 my-8 text-yellow-600 font-bold text-xl"> Clothes </p>
    <div class="mb:mx-3 sm:mx-6 md:mx-20 xl:mx-auto max-w-screen-xl my-8 flex flex-wrap w-auto bg-white h-auto">
        {{-- render ra bao nhiêu sản phẩm tùy ý, dùng vòng lặp để render theo db, ở đây lấy 4 cái làm mẫu --}}
        <x-shop.product-card></x-shop.product-card>
        <x-shop.product-card></x-shop.product-card>
        <x-shop.product-card></x-shop.product-card>
        <x-shop.product-card></x-shop.product-card>
    </div>
</x-app-layout>