<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{asset('css/notify.css')}}">
    <script src="{{ URL::asset('js/notify.js') }}"></script>
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
                var name = $('.name').val();
                var phone = $('.phone').val();
                var _token = $('input[name="_token"]').val();
                if (name.length>0 && phone.length>0 && wards.length>0) {
                    document.cookie = "check = 1"
                    var check1 = document.cookie.length;
                    $.ajax({
                    url : '{{route('ship')}}',
                    method: 'POST',
                    data: {
                        name:name,
                        phone:phone,
                        city:city,
                        province:province,
                        wards:wards,
                        _token:_token
                    },
                    success:function(data){
                        //alert('Thành công');    
                    }
                    });
                    //Notify  
                    toast({
                        title: "Thành công!",
                        message: "Bạn đã lưu thành công địa chỉ.",
                        type: "success",
                        duration: 5000
                    });

                
                } else {
                    toast({
                        title: "Thất bại!",
                        message: "Có lỗi xảy ra, vui lòng nhập lại thông tin.",
                        type: "error",
                        duration: 5000
                    });

                }                   
            });                            
            document.getElementById("btn1_momo").onclick = function () {
                document.getElementById("content_momo").style.display = 'none';
            };
                        
            document.getElementById("btn2_momo").onclick = function () {
                document.getElementById("content_momo").style.display = 'block';
            };

            document.getElementById("btn3").onclick = function () {
                document.getElementById("content_momo").style.display = 'none';
            };
            //----------------------Đặt hàng-------------------
            $('.shopping').click(function () {
                if (document.cookie.length > 354) {
                    document.cookie = "check = 1 ; expires = Thu, 01 Jan 1970 00:00:00 GMT"
                    toast({
                        title: "Thành công!",
                        message: "Đặt hàng thành công. Sẽ chuyển tới trang chủ sau 3 giây",
                        type: "success",
                        duration: 5000
                    });
                     //----------Xoa san pham trong gio hang-----------------//
                    var _token = $('input[name="_token"]').val();
                    $.ajax({
                    url : '{{route('complete')}}',
                    method: 'POST',
                    data: {

                        _token:_token
                    },
                    success:function(data){
                        //alert('Thành công');    
                    }
                    });

                    //-------------Quay lai trang chu-------------------------
                    setTimeout(function(){
                        window.location.href = 'http://127.0.0.1:8000/shoe-shop';
                    }, 3000);

                    } else {
                    toast({
                        title: "Thất bại!",
                        message: "Bạn chưa nhập thông tin.",
                        type: "error",
                        duration: 5000                  
                    }); 
                    } 
            });
        });
    </script>
    <title>Document</title>
</head>
<body class="font-semibold text-gray-800">
    @include('layouts.navigation') 

    <div>
        <div id="toast"></div>     {{-- Thanh notify --}}
    </div>

    {{-- Payment Momo --}}

    <div class=" bg-gray-100">  
        <div id="content_momo" class="w-1/6 hidden flex justify-center items-center bg-gray-200 antialiased absolute top-24 right-24">
            <div class="flex bg-gray-200 flex-col max-w-2xl mx-auto rounded-xl border border-gray-300 shadow-xl">
              <div class="flex justify-between border-b p-4 border-gray-200 rounded-tl-lg rounded-tr-lg">
                <div class="flex">
                    <img class="method-icon w-full" src="https://frontend.tikicdn.com/_desktop-next/static/img/icons/checkout/icon-payment-method-mo-mo.svg" alt="momo">
                    <img class="method-icon w-full" src="https://frontend.tikicdn.com/_desktop-next/static/img/icons/checkout/icon-payment-method-zalo-pay.svg" alt="zalopay">
                </div>
                <button type="button" class="w-6 h-6" id="btn1_momo">
                    <svg id="" fill="none" stroke="currentColor"viewBox="0 0 24 24"xmlns="http://www.w3.org/2000/svg">
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M6 18L18 6M6 6l12 12"
                    ></path>
                    </svg>
                </button>
              </div>
              <div class="flex flex-col px-6 py-2 bg-gray-50 mb-1">
                <p class="mb-4 font-semibold text-gray-700">Số tài khoản</p>
                <div action="" class="flex justify-center mb-4">
                    <form action=""></form>
                    @csrf
                    <input placeholder="Số điện thoại" type="number" class="pl-4 w-4/5 h-8 rounded-xl border-2  border-blue-100 focus:outline-none">
                    <style>
                        input::-webkit-inner-spin-button {
                            -webkit-appearance: none;
                        }
                    </style>
                    <div class="flex justify-end ml-2">
                        <button type="submit" class="px-3 py-1 text-white font-semibold bg-blue-600 rounded-xl">
                            Save
                        </button>
                    </div>
                    </form>
                </div>
            </div>
          </div>
    </div>
{{--     Main--}}
<div class="bg-gray-100 flex justify-center w-full pt-8 mb-10" id="main"> 
    <div class="flex justify-between w-5/6">
        <div class="flex bg-white w-2/3 rounded-xl">
            <div>
                
            </div>
            <div class="py-5 px-10 w-full shadow-2xl">
                <p class="text-2xl mb-5 font-medium text-gray-800">Thông tin giao hàng</p>
                <div class="flex w-full justify-between font-semibold text-gray-800 tracking-wide">
                    <div class="w-1/2">
                        <div class="w-full">
                            <p class="text-lg">Họ Tên:</p>
                            <input type="text" placeholder="Họ tên" class="rounded-xl hover:border-blue-300 h-10 w-full border-solid border-2 pl-3 mb-4 name focus:outline-none focus:shadow-outline" name="name_vali">
                        </div>

                        <div class="w-full">
                            <p class="text-lg">Số điện thoại:</p>
                            <input type="number" placeholder="Số điện thoại của bạn" class="hover:border-blue-300 appearance-none rounded-xl h-10 w-full border-solid border-2 pl-3 mb-4 phone focus:outline-none focus:shadow-outline" name="phone_vali" required>
                            <style>
                                input::-webkit-inner-spin-button {
                                    -webkit-appearance: none;
                                }
                            </style>
                        </div>
                    </div>
                    <div class="w-1/2 ml-8">
                        <form action="" method="POST">
                            @csrf
                            <div class="w-full">
                                <p class="text-lg">Chọn tỉnh/thành phố:</p>
                                <div class="form-control hover:border-blue-300 border-2 mb-4 h-10 w-full rounded-xl">
                                    <select name="city" id="city" class="rounded-xl w-full h-full pl-3 choose city focus:outline-none focus:shadow-outline">
                                        <option value="" class="rounded-xl"><p class="">Tỉnh/Thành phố</p>
                                        @foreach ($thanhpho as $v)
                                            <option class="rounded-xl" value="{{$v->matp}}">{{ $v->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div>
                                <p class="text-lg">Quận/Huyện:</p>
                                <div class="form-control hover:border-blue-300 border-2 mb-4 h-10 w-full rounded-xl">
                                    <select name="province" id="province" class="rounded-xl w-full h-full pl-3 choose province  focus:outline-none focus:shadow-outline">
                                        <option value="">Chọn quận huyện</option>
                                    </select>
                                </div>
                            </div>
                            <div class="">
                                <p class="text-lg">Phường/Xã:</p>
                                <div class="form-control hover:border-blue-300 border-2 mb-4 h-10 w-full rounded-xl">
                                    <select name="wards" id="wards" class="w-full h-full pl-3 wards rounded-xl focus:outline-none focus:shadow-outline">
                                        <option value="">Chọn xã phường</option>   
                                    </select>
                                </div>
                            </div>
                            <div class="mb-10 w-full">
                                <p class="text-xl mb-2">Loại địa chỉ:</p>
                                <div>
                                    <div class="flex mb-2">
                                        <input type="radio" name="diachi" value="congty" class="w-5 h-5 mt-1 mr-2" checked>
                                        <span class="text-lg font-normal">Nhà riêng</span>
                                    </div>
                                    <div class="flex">
                                        <input type="radio" name="diachi" value="nharieng" class="w-5 h-5 mt-1 mr-2">
                                        <span class="text-lg font-normal">Công ty</span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="flex justify-end w-full">
                                    <button type="button" id="success" class="rounded-md bg-blue-500 add_delivery w-1/2  h-11 text-xl text-white mt-2" name="add_delivery">Lưu</button>
                            </div>
                            <div>

                            </div>

                            </form>


                    </div>
                </div>        
            </div>
        </div>

        <div class="bg-white w-1/3 ml-3 p-3 shadow-2xl rounded-xl">
            <p class="text-xl mt-2 mb-1">Chọn phương thức thanh toán</p>
            <div class="p-2">
                <div class="pl-2">
                    <div class="flex mb-2">
                        <div class="" id="btn3">
                            <input type="radio" name="diachi" value="" class="w-4 h-4 mt-1 mr-2 align-middle" checked>
                        </div>
                        <div class="flex">
                            <img class="method-icon mr-2 align-middle" width="25" src="https://frontend.tikicdn.com/_desktop-next/static/img/icons/checkout/icon-payment-method-cod.svg" alt="cod">
                            <p class="text-lg text-gray-500"> Thanh toán khi nhận hàng</p>
                        </div>
                    </div>
                    <div class="flex mb-2">
                        <div>
                            <input id="btn2_momo" type="radio" name="diachi" value="" class="w-4 h-4 mt-1 mr-2 align-middle">
                        </div>
                        <div class="flex">
                            <img class="method-icon align-middle mr-2" width="23" height="25" src="https://timo.vn/wp-content/uploads/2018/04/card-1673581_1280.png" alt="momo">
                            <p class="text-lg text-gray-500">Thanh toán bằng ví điện tử</p>
                            
                        </div>

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
                    <input type="text" name="voucher" placeholder="Nhập mã giảm giá" class="hover:border-blue-300 mt-3 boder  border-2 w-2/3 h-10 pl-3 mr-3 rounded-xl focus:outline-none">
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
                        <p>
                            <?php
                                $tam_tinh = $sum;
                                $try = number_format($sum, 0, ',', '.');
                            ?>
                            {{ $try}} đ
                        </p>
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
                            @if (isset($vous))
                                <?php
                                    $giamgia = $vous;
                                    $try = number_format($vous, 0, ',', '.');
                                ?>
                                <p>{{$try}} đ</p>
                            @else
                                <p>{{$giamgia = 0}} đ</p>
                            @endif
                    </div>
                    {{-- @endforeach --}}
                </div>

                <div class="flex p-1  border-solid border-t-2 mb-6">
                    <div class="w-1/2">
                        <p>Tổng cộng:</p>
                    </div>
                    <div class="flex justify-end w-1/2 pr-5">
                        <p class="text-xl text-red-600">
                            <?php
                                $tong = $tam_tinh + $giamgia + $phi_giao_hang;
                                $try = number_format($tong, 0, ',', '.');
                            ?>
                            {{ $try}} đ
                        </p>
                    </div>
                </div>

                <div class="w-full flex justify-center">
                    <button type="submit" class="bg-red-400 rounded-md w-2/3 h-11 shopping"><p class="text-white">Đặt hàng</p></button>
                </div>
            </div>
        </div>
    </div>
</div>
<x-welcome.footer>

</x-welcome.footer>
</body>
</html>