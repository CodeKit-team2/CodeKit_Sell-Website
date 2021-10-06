<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" >
    <title>KOSMOS</title>
</head>
<body class="bg-gray-100">
    <div class="">
        <div class=" w-full">
            <div class="m-3">
                <a href="">Trang chủ</a>
            </div>
            <div class="flex justify-center">
                <div class="bg-gray-100 w-1/5">
                    <ul>
                        <li class="p-2"><a href="" class="flex">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1.5em" width="1.5em" xmlns="http://www.w3.org/2000/svg"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"></path></svg>
                            <span class="ml-2 text-xl">Thông tin tài khoản</span>
                        </a></li>
                        <li class="p-2"><a href="" class="flex">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1.5em" width="1.5em" xmlns="http://www.w3.org/2000/svg"><path d="M13 12h7v1.5h-7zm0-2.5h7V11h-7zm0 5h7V16h-7zM21 4H3c-1.1 0-2 .9-2 2v13c0 1.1.9 2 2 2h18c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 15h-9V6h9v13z"></path></svg>
                            <span class="ml-3 text-xl">Quản lý đơn hàng</span>
                            <ul class="pl-16 pt-1 list-disc">
                                <li><a href="{{route('donhang')}}" class=""> Đơn hàng</a></li>
                                <li><a href="{{route('lichsu')}}" class=""> Lịch sử đơn hàng</a></li>
                            </ul>
                        </a></li>
                    </ul>
                </div>
                <div class="w-2/3 bg-white">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
</body>
</html>
