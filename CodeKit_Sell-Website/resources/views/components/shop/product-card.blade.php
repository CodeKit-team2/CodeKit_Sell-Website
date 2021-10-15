{{-- {{-- Thẻ preview sản phẩm --}}  

    @foreach ($id as $v)
    <div class="mb:w-1/2 sm:w-1/3 md:w-1/4 border-l border hover:border-indigo-600 p-2">
        <p class="p-5 font-bold uppercase ">{{$v->pa_name}}</p>
        <a href="{{route('product',$v->pa_id)}}">
            <img class="w-full" src="{{ URL::to('/images/products/'.$v->pa_images) }}">
        </a>
        <div class="flex justify-between">
            <p class="p-5 font-bold text-indigo-600">{{number_format($v->pa_prices, 0, ',', '.')}} đ</p>
            <div class="p-5">
                <x-icons.cart></x-icons.cart>
            </div>            
        </div>
    
    </div>
    @endforeach
