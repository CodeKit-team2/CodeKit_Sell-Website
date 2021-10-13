<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Shop') }}
        </h2>
    </x-slot>
    <div class="mb:mx-3 sm:mx-6 md:mx-20 xl:mx-auto max-w-screen-xl my-16  w-auto bg-white h-auto border">
        <div class="mx-auto xl:flex xl:flex-wrap shadow-xl mb-20">
            <div class="mb:w-full xl:w-1/2 border-r-4">
                {{-- Ảnh sp --}}
                <img class="" src="{{ URL::to('/assets/img/converse.jpg') }}">
            </div>
            <div class="mb:w-full xl:w-1/2 p-5 relative">
                {{-- Thông tin sản phẩm --}}
                @foreach ($item as $v)
                    {{-- <x-shop.single-prodInfo></x-shop.single-prodInfo> --}}
                    
                   {{--  Noti suscess --}}
                    
                    @if (Session::has('success'))
                        <div class="flex absolute top-6 right-6">
                            <div class="m-auto">
                            <div class="bg-white rounded-lg border-gray-300 border p-3 shadow-lg">
                                <div class="flex flex-row">
                                <div class="px-2">
                                    <svg width="24" height="24" viewBox="0 0 1792 1792" fill="#44C997" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1299 813l-422 422q-19 19-45 19t-45-19l-294-294q-19-19-19-45t19-45l102-102q19-19 45-19t45 19l147 147 275-275q19-19 45-19t45 19l102 102q19 19 19 45t-19 45zm141 83q0-148-73-273t-198-198-273-73-273 73-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273zm224 0q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z"/>
                                    </svg>
                                </div>
                                <div class="ml-2 mr-6">
                                    <span class="font-semibold">Thêm vào giỏ thành công!</span>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    @endif
                    @if (Session::has('fail'))
                        <div class="flex absolute top-6 right-6 animate-bounce">
                            <div class="m-auto">
                            <div class="bg-white rounded-lg border-gray-300 border p-3 shadow-lg">
                                <div class="flex flex-row">
                                <div class="px-2">
                                    <svg width="24" height="24" viewBox="0 0 1792 1792" fill="#44C997" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1299 813l-422 422q-19 19-45 19t-45-19l-294-294q-19-19-19-45t19-45l102-102q19-19 45-19t45 19l147 147 275-275q19-19 45-19t45 19l102 102q19 19 19 45t-19 45zm141 83q0-148-73-273t-198-198-273-73-273 73-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273zm224 0q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z"/>
                                    </svg>
                                </div>
                                <div class="ml-2 mr-6">
                                    <span class="font-semibold">Sản phẩm đã có trong giỏ hàng!</span>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    @endif
                    <p class="mb:hidden xl:block font-bold uppercase mb-2 text-2xl">{{$v->pa_name}}</p>
                    <img class="h-8 ml-4" src="{{ URL::to('/images/icons/Picture1.jpg') }}" alt="">
                    <p class="p-3 xl:p-6 text-xl font-light">{{$v->pa_discrible}}đ</p>
                    <hr>
                    <p class="p-3 xl:p-6 font-bold text-3xl text-indigo-600">
                        <?php
                            $try = number_format($v->pa_prices, 0, ',', '.');
                        ?>
                        {{ $try}} đ
                    </p>
                    {{-- Phần chọn mua của khách --}}
                @endforeach
                
                <form action="{{route('add_cart',$v->pa_id)}}" method="POST" class="absolute bottom-10 w-full">
                    @csrf
                    {{-- Chọn màu --}}
                    <hr>
                    <div class="flex justify-between">
                        {{-- Chọn size --}}
                        <p class="p-3 xl:p-6 text-xl mr-4">Size:
                            <select class="text-indigo-600 border-indigo-600 text-xl mr-20" id="" name="size">
                                <option value="S">S</option>
                                <option value="M">M</option>
                                <option value="L">L</option>
                                <option value="XL">XL</option>
                            </select>
                        </p>
                        {{-- Nút đặt hàng --}}
                        <div class="w-1/3 mt-3 mx-auto xl:mt-6">
                                <button type="submit" class="w-full h-10 border text-indigo-600 border-indigo-600 hover:bg-indigo-600 hover:text-white" type="button">Add to cart</button>
                        </div>
                    </div>                
                </form>
            </div>
        </div>
        {{-- Phần gợi ý sản phẩm --}}
        <x-shop.suggest></x-shop.suggest>
    </div>
</x-app-layout>
<x-welcome.footer>

</x-welcome.footer>