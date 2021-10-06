<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/vouchers.css')}}">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
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
        });
    </script>

</head>
<body class="bg-gray-100">
    <div class="flex justify-center">
        <div class="flex bg-white w-3/5 rounded-md">
            <div class="py-5 px-10 w-full">
                <p class="text-xl mb-5">Thông tin giao hàng</p>
                <div class="flex w-full justify-between">
                    <div class="w-2/3">
                        <form action="  ">
                        @csrf
                        <div class="w-full">
                            <p class="text-lg">Chọn tỉnh/thành phố:</p>
                            <div class="form-control border-solid border-2 mb-4 h-10 w-full">
                                <select name="city" id="city" class="w-full h-full pl-3 choose city">
                                    <option value="" class=""><p class="">Tỉnh/Thành phố</p>
                                    @foreach ($user as $v)
                                        <option value="{{$v->matp}}">{{ $v->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div>
                            <p class="text-lg">Quận/Huyện:</p>
                            <div class="form-control border-solid border-2 mb-4 h-10 w-full">
                                <select name="province" id="province" class="w-full h-full pl-3 choose province">
                                    <option value="">--Chọn quận huyện--</option>
                                </select>
                            </div>
                        </div>
                        <div>
                            <p class="text-lg">Phường/Xã:</p>
                            <div class="form-control border-solid border-2 mb-4 h-10 w-full">
                                <select name="wards" id="wards" class="w-full h-full pl-3 wards">
                                    <option value="">--Chọn xã phường--</option>   
                                </select>
                            </div>
                        </div>
                        <div class="form-control border-solid border-2 mb-4 h-10 w-full">
                            <button type="button" class="pl-3 add_delivery" name="add_delivery">Thêm địa chỉ</button>
                        </div>

                        </form>

                        {{-- <form action="{{route('gui')}}" method="post">
                            @csrf
                            <input type="text" name="name">
                            <button type="submit">Nút</button>
                        </form> --}}
                    </div>
                </div>

                

                
            </div>
        </div>
    </div>
</body>
</html>