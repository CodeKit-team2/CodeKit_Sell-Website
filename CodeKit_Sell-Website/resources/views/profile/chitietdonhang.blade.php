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
                          <th class="text-sm text-left uppercase font-semibold text-grey-darker p-3 bg-grey-light">Mã sản phẩm</th>
                          <th class="text-sm text-left uppercase font-semibold text-grey-darker p-3 bg-grey-light">Tên sản phẩm</th>
                          <th class="text-sm text-left uppercase font-semibold text-grey-darker p-3 bg-grey-light text-center">Số lượng</th>
                          <th class="text-sm uppercase font-semibold text-grey-darker p-3 bg-grey-light"><img src="https://frontend.tikicdn.com/_desktop-next/static/img/icons/trash.svg" alt="deleted"></th>
                        </tr>
                      </thead>
                      <tbody class="align-baseline">
                        <tr class="group cursor-pointer hover:bg-grey-lightest h-10">
                          <td class="text-sm p-3 border-t border-grey-light whitespace-no-wrap">1</td>
                          <td class="text-sm p-3 border-t border-grey-light whitespace-no-wrap"><a href="" class="text-blue-600 pl-4">01010010</a></td>
                          <td class="text-sm p-3 border-t border-grey-light whitespace-no-wrap pl-6">200.000</td>
                          <td class="text-sm p-3 border-t border-grey-light whitespace-no-wrap text-center">
                            <div class="buttons_added ">
                              <input type="number" class=" text-center border-none" value="1" max="10" min="1">
                            </div>
                          </td>
                          <td class="text-sm p-3 border-t border-grey-light whitespace-no-wrap text-sm">
                            <div class="">
                              <a href="" class="no-underline text-blue"><img src="https://frontend.tikicdn.com/_desktop-next/static/img/icons/trash.svg" alt="deleted"></a> 
                            </div>
                          </td>
                        </tr>

                        <tr class="group cursor-pointer hover:bg-grey-lightest">
                          <td class="text-sm p-3 border-t border-grey-light whitespace-no-wrap">1</td>
                          <td class="text-sm p-3 border-t border-grey-light whitespace-no-wrap"><a href="" class="text-blue-600 pl-4">01010010</a></td>
                          <td class="text-sm p-3 border-t border-grey-light whitespace-no-wrap pl-6">200.000</td>
                          <td class="text-sm p-3 border-t border-grey-light whitespace-no-wrap text-center">
                            <div class="buttons_added ">
                              <input type="number" class=" text-center border-none" value="1" max="10" min="1">
                            </div>
                          </td>
                          <td class="text-sm p-3 border-t border-grey-light whitespace-no-wrap text-sm group-hover:visible">
                            <div class="">
                              <a href="" class="no-underline text-blue"><img src="https://frontend.tikicdn.com/_desktop-next/static/img/icons/trash.svg" alt="deleted"></a> 
                            </div>
                          </td>
                        </tr>
                          
                      </tbody>
                    </table>

                    {{-- Tổng tiền --}}

                    <div class="bg-white w-1/4 ml-3 p-3">
                      <div class="w-full my-4">
                          <div class="flex">    
                              <p class="text-xl mr-3">Mã giảm giá:</p>
                              <i class="fa fa-ticket vouchers" style="font-size:25px;color:red"></i>
                          </div>
                          <form action="">
                              <input type="text" placeholder="Nhập mã giảm giá" class="mt-3 boder border-solid border-2 w-2/3 h-10 pl-3 mr-3 input_vou rounded focus:outline-none focus:shadow-outline">
                              <button type="submit" class="bg-blue-500 w-1/4 h-10 text-white rounded-md vouchers js-login-modal">Áp dụng</button>
                          </form>
                      <div class="w-full">
                          <p class="text-xl mb-4">Thông tin đơn hàng</p>
                          <div class="flex p-1">
                              <div class="w-1/2">
                                  <p>Tạm tính:</p>
                              </div>
                              <div class="flex justify-end w-1/2 pr-5">
                                  <p>{{ $tam_tinh = 1000 }} đ</p>
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
                                  <p> {{ $ma_giam_gia= /* $c->v_discount */ 0 }}  đ</p>
                              </div>
                              {{-- @endforeach --}}
                          </div>
          
                          <div class="flex p-1  border-solid border-t-2 mb-10">
                              <div class="w-1/2">
                                  <p>Tổng cộng:</p>
                              </div>
                              <div class="flex justify-end w-1/2 pr-5">
                                  <p class="text-xl text-red-600">{{ $tong = $tam_tinh + $ma_giam_gia + $phi_giao_hang}} đ</p>
                              </div>
                          </div>
          
                          <div class="w-full">
                              <a href="{{route('muahang')}}" class="w-full flex justify-center ">
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
