<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="stylesheet" href="{{asset('css/vouchers.css')}}">
    <script type="text/javascript">
        $(document).ready(function(){
            $('.choose').on('change',function(){
                var action = $(this).attr('id');
                var ma_id = $(this).val();
                var _token = $('input[name="_token"]').val();
                var result = '';
            
                if(action=='city'){
                    result = 'province';
                }else{
                    result = 'wards';
                }
                
                $.ajax({
                    url : '{{route('gui')}}',
                    method: 'POST',
                    data: {
                        action:action,
                        ma_id:ma_id,
                        _token:_token
                    },
                    success:function(data){
                    $('#'+result).html(data);     
                    }
                }); 

            });

            $('.add_delivery').click(function () { 
                var city = $('.city').val();
                var province = $('.province').val();
                var wards = $('.wards').val();
                var _token = $('input[name="_token"]').val();
                $.ajax({
                    url : '{{route('ship')}}',
                    method: 'POST',
                    data: {
                        city:city,
                        province:province,
                        wards:wards,
                        _token:_token
                    },
                    success:function(data){
                        alert('Thành công');    
                    }
                });   
            }); 
        });
    </script>
    <title>Document</title>
</head>
<body class="bg-gray-100 flex justify-center w-full pt-8">
    <div class="flex justify-between w-5/6">
        <div class="flex bg-white w-2/3 rounded-md">
            <div>

            </div>
            <div class="py-5 px-10 w-full">
                <p class="text-xl mb-5">Thông tin giao hàng</p>
                <div class="flex w-full justify-between">
                    <div class="w-1/2">
                        <div class="w-full">
                            <p class="text-lg">Họ Tên:</p>
                            <input type="text" placeholder="Họ tên" class="rounded h-10 w-full border-solid border-2 pl-3 mb-4 name focus:outline-none focus:shadow-outline" name="_name">
                        </div>

                        <div class="w-full">
                            <p class="text-lg">Số điện thoại:</p>
                            <input type="text" placeholder="Số điện thoại của bạn" class="rounded h-10 w-full border-solid border-2 pl-3 mb-4 sdt focus:outline-none focus:shadow-outline" name="_sdt">
                        </div>
                    </div>

                    <div class="w-1/2 ml-8">
                        <form action="" method="POST">
                            @csrf
                            <div class="w-full">
                                <p class="text-lg">Chọn tỉnh/thành phố:</p>
                                <div class="form-control border-solid border-2 mb-4 h-10 w-full rounded">
                                    <select name="city" id="city" class="rounded w-full h-full pl-3 choose city focus:outline-none focus:shadow-outline">
                                        <option value="" class=""><p class="">Tỉnh/Thành phố</p>
                                        @foreach ($thanhpho as $v)
                                            <option value="{{$v->matp}}">{{ $v->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div>
                                <p class="text-lg">Quận/Huyện:</p>
                                <div class="form-control border-solid border-2 mb-4 h-10 w-full rounded">
                                    <select name="province" id="province" class="w-full h-full pl-3 choose province rounded focus:outline-none focus:shadow-outline">
                                        <option value="">Chọn quận huyện</option>
                                    </select>
                                </div>
                            </div>
                            <div class="">
                                <p class="text-lg">Phường/Xã:</p>
                                <div class="form-control border-solid border-2 mb-4 h-10 w-full rounded">
                                    <select name="wards" id="wards" class="w-full h-full pl-3 wards rounded focus:outline-none focus:shadow-outline">
                                        <option value="">Chọn xã phường</option>   
                                    </select>
                                </div>
                            </div>
                            <div class="mb-10 w-full">
                                <p class="text-xl mb-2">Loại địa chỉ:</p>
                                <div>
                                    <div class="flex mb-2">
                                        <input type="radio" name="diachi" value="congty" class="w-5 h-5 mt-1 mr-2" checked>
                                        <span class="text-lg">Nhà riêng</span>
                                    </div>
                                    <div class="flex">
                                        <input type="radio" name="diachi" value="nharieng" class="w-5 h-5 mt-1 mr-2">
                                        <span class="text-lg">Công ty</span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="flex justify-end w-full ">
                                <button type="button" class="rounded-md bg-blue-500 add_delivery w-1/2  h-11 text-xl text-white" name="add_delivery">Lưu</button>
                            </div>
                            
                            <div>

                            </div>

                            </form>


                    </div>
                </div>        
            </div>
        </div>

        <div class="bg-white w-1/3 ml-3 p-3">
            <p class="text-xl mt-2">Chọn phương thức thanh toán</p>
            <div class="p-2">
                <div class="pl-2">
                    <div class="flex mb-2">
                        <input type="radio" name="diachi" value="congty" class="w-5 h-5 mt-1 mr-2" checked>
                        <span class="text-lg">Thanh toán bằng thẻ</span>
                    </div>
                    <div class="flex">
                        <input type="radio" name="diachi" value="nharieng" class="w-5 h-5 mt-1 mr-2">
                        <span class="text-lg">Thanh toán khi nhận hàng</span>
                    </div>
                </div>
            </div>
            <div class="w-full my-4">
                <div class="flex">    
                    <p class="text-xl mr-3">Mã giảm giá:</p>
                    <i class="fa fa-ticket vouchers" style="font-size:25px;color:red"></i>
                </div>
                <form action="{{route('voucher')}}" method="POST">
                    @csrf
                    <input type="text" name="voucher" placeholder="Nhập mã giảm giá" class="mt-3 boder border-solid border-2 w-2/3 h-10 pl-3 mr-3 rounded focus:outline-none">
                    <button type="submit" class="bg-blue-500 w-1/4 h-10 text-white rounded-md vouchers js-login-modal">Áp dụng</button>
                </form>
            </div>
            <div class="w-full">
                <p class="text-xl mb-4">Thông tin đơn hàng</p>
                <div class="flex p-1">
                    <div class="w-1/2">
                        <p>Tạm tính:</p>
                    </div>
                    <div class="flex justify-end w-1/2 pr-5">
                        <p>{{ $tam_tinh = $sum }} đ</p>
                    </div>
                </div>

                <div class="flex p-1">
                    <div class="w-1/2">
                        <p>Phí giao hàng:</p>
                    </div>
                    <div class="flex justify-end w-1/2 pr-5">
                        <p>{{ $phi_giao_hang = 2000 }} đ</p>
                    </div>
                </div>

                <div class="flex p-1 mb-4">
                    {{-- @foreach($vou as $c) --}}     
                    
                    <div class="w-1/2">
                        <p>Giảm giá:</p>
                    </div>
                    <div class="flex justify-end w-1/2 pr-5">
                            @isset($vous)
                                <p>{{$vous}}</p>
                            @endisset đ                    </div>
                    {{-- @endforeach --}}
                </div>

                <div class="flex p-1  border-solid border-t-2 mb-10">
                    <div class="w-1/2">
                        <p>Tổng cộng:</p>
                    </div>
                    <div class="flex justify-end w-1/2 pr-5">
                        <p class="text-xl text-red-600">{{ $tong = $tam_tinh + $vous + $phi_giao_hang}} đ</p>
                    </div>
                </div>

                <div class="w-full">
                    <a href="" class="w-full flex justify-center ">
                        <button type="button" class="bg-red-400 rounded-md w-2/3 h-10 mt-4"><p class="text-white">Mua hàng</p></button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>