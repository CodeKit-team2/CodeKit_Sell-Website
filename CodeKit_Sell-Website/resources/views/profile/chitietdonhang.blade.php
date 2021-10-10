<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Alo</title>
    <script>
        $(document).ready(function () {
          //Chua xong
          /* $('.soluong').click(function () { 
            var soluong = $('.soluong').val();
            var _token = $('input[name="_token"]').val();
            $.ajax({
                    url : '{{url('chitiet')}}',
                    method: 'POST',
                    data: {
                        soluong:soluong,
                        _token:_token
                    },
                    success:function(data){
                    }
                });
            
          }); */
        }); 
    </script>
</head>
<body class="bg-gray-100">
    <div>
        <div>
            Nav
        </div>
        <p class="text-xl">Đơn hàng</p>
        <div class="flex justify-center">
          <div class="w-full flex">
            <div class="p-3 w-full ml-8 mt-4">
                <div class="mt-6 flex">
                    <table class="w-2/3 table-collapse bg-white h-80">
                      <thead>
                        <tr>
                          <th class="text-sm text-left uppercase font-semibold text-grey-darker p-3 bg-grey-light">STT</th>
                          <th class="text-sm text-left uppercase font-semibold text-grey-darker p-3 bg-grey-light">Tên sản phẩm</th>
                          <th class="text-sm text-left uppercase font-semibold text-grey-darker p-3 bg-grey-light">Ảnh</th>
                          <th class="text-sm text-left uppercase font-semibold text-grey-darker p-3 bg-grey-light pl-8">Giá</th>
                          <th class="text-sm text-left uppercase font-semibold text-grey-darker p-3 bg-grey-light text-center">Số lượng</th>
                          <th class="text-sm uppercase font-semibold text-grey-darker p-3 bg-grey-light"><img src="https://frontend.tikicdn.com/_desktop-next/static/img/icons/trash.svg" alt="deleted"></th>
                        </tr>
                      </thead>
                      <tbody class="align-baseline">
                        @foreach ($id as $v)
                        <tr class="group cursor-pointer hover:bg-grey-lightest">
                          <td class="text-sm p-3 border-t border-grey-light whitespace-no-wrap align-middle">{{$v->p_id}}</td>
                          <td class="text-sm p-3 border-t border-grey-light whitespace-no-wrap align-middle">{{$v->p_name}}</td>
                          <td class="text-sm p-3 border-t border-grey-light whitespace-no-wrap">{{$v->p_images}}{{-- <img height="100" width="100" src="{{url('images/giay.jpg')}}" alt="Image"> --}}</td>
                          <td class="text-sm p-3 border-t border-grey-light whitespace-no-wrap pl-6 align-middle">{{$v->p_prices}}</td>
                          <td class="text-sm p-3 border-t border-grey-light whitespace-no-wrap text-center align-middle">
                            <div class="buttons_added align-middle">
                              <form action="" method="POST">
                                @csrf
                                <input type="number" name="number" class="soluong text-lg text-center border-none focus:outline-none" value="1" max="10" min="1">
                              </form>
                            </div>
                          </td>
                          <td class="text-sm p-3 border-t border-grey-light whitespace-no-wrap text-sm group-hover:visible align-middle">
                            <div onclick="if (!confirm('Bạn có muốn xóa ra giỏ hàng?')) { return false }" class="">
                              <form action="{{route('del_product',$v->p_id)}}" method="POST">
                                @csrf
                                <button type="submit" class="no-underline text-blue"><img src="https://frontend.tikicdn.com/_desktop-next/static/img/icons/trash.svg" alt="deleted"></button> 
                              </form>
                            </div>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>

                    {{-- Tổng tiền --}}

                    <div class="bg-white w-1/4 ml-3 p-3">
                      <div class="w-full">
                          <div class="mb-3">
                            <p class="text-xl mb-4">Thông tin đơn hàng</p>        
                            @foreach ($id as $v)
                                <p>. {{$v->p_name}} </p>
                            @endforeach
                          </div>
                          <div class="flex p-1  border-solid border-t-2 mb-10">
                              <div class="w-1/2">
                                  <p>Tạm tính:</p>
                              </div>
                              <div class="flex justify-end w-1/2 pr-5">
                                  <?php
                                    $sum = 0;
                                    foreach ($id as $v) {
                                      $sum = $sum + $v->p_prices;
                                    }
                                  ?>
                                  <p class="text-xl text-red-600">{{$sum}} đ</p>
                              </div>
                          </div>
          
                          <div class="w-full mt-28">
                              <a href="{{route('muahang', $sum)}}" class="w-full flex justify-center ">
                                  <button type="button" class="bg-red-400 rounded-md w-2/3 h-10 mt-4"><p class="text-white">Mua hàng</p></button>
                              </a>
                          </div>

                      </div>
                  </div>
                </div>
            </div>
          </div>
        </div>

    </div>
</body>
</html>
