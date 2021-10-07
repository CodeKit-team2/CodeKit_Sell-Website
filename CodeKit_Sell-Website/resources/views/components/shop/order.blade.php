<form action="{{route('add_cart')}}" method="POST">
    @csrf
    {{-- Chọn màu --}}
    <p class="p-3 xl:p-6 text-xl">Color:
        <input type="radio" name="color" class="bg-red-600 text-red-600 w-6 h-6 ml-5" value="red" checked>
        <input type="radio" name="color" class="bg-white border text-white w-6 h-6 ml-2" value="white" checked>
        <input type="radio" name="color" class="bg-black text-black w-6 h-6 ml-2" value="black" checked>
        <input type="radio" name="color" class="bg-blue-600 text-blue-600 w-6 h-6 ml-2" value="blue">
    </p>
    <hr>
    <div class="flex justify-between">
        {{-- Chọn size --}}
        <p class="p-3 xl:p-6">Size:
            <select class="text-indigo-600 border-indigo-600" id="" name="size">
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