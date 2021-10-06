<form>
    {{-- Chọn màu --}}
    <p class="p-3 xl:p-6 text-xl">Color:
        <input class="bg-red-600 text-red-600 w-6 h-6 ml-5" type="checkbox" value="red">
        <input class="bg-white border text-white w-6 h-6 ml-2" type="checkbox" value="white">
        <input class="bg-black text-black w-6 h-6 ml-2" type="checkbox" value="black">
        <input class="bg-blue-600 text-blue-600 w-6 h-6 ml-2" type="checkbox" value="blue
        ">
    </p>
    <hr>
    <div class="flex justify-between">
        {{-- Chọn size --}}
        <p class="p-3 xl:p-6">Size:
            <select class="text-indigo-600 border-indigo-600" id="" name="size">
                <option value="">S</option>
                <option value="">M</option>
                <option value="">L</option>
                <option value="">XL</option>
            </select>
        </p>
        {{-- Nút đặt hàng --}}
        <div class="w-1/3 mt-3 mx-auto xl:mt-6">
            <button class="w-full h-10 border text-indigo-600 border-indigo-600 hover:bg-indigo-600 hover:text-white" type="button">Add to cart</button>
        </div>
    </div>                
</form>