{{-- Thẻ preview sản phẩm --}}
<div class="mb:w-1/2 sm:w-1/3 md:w-1/4 border-l border">
    <p class="p-5 font-bold uppercase ">Chuck Classic 70'</p>
    <a href="{{url('/product')}}">
    <img class="" src="{{ URL::to('/assets/img/converse.jpg') }}">
    </a>
    <div class="flex justify-between">
        <p class="p-5 font-bold text-indigo-600">55$</p>
        <div class="p-5">
            <x-icons.cart></x-icons.cart>
        </div>            
    </div>
</div>