<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" >
    <title>KOSMOS</title>
</head>
<body>
        <div class="bg-gray-100 w-96 p-5 rounded-2xl">
            <form action="{{route('addinfo')}}" method="POST">
                @csrf
                <p class="text-4xl mb-10">Đăng ký</p>
                <input class="w-full my-4 p-4 rounded-xl" type="text" name="name" placeholder="Tên" required>
                <input class="w-full my-4 p-4 rounded-xl" type="text" name="email" placeholder="Email hoăc số điện thoại" required>
                <input class="w-full my-4 p-4 rounded-xl" type="password" name="password" placeholder="Mật khẩu" required>
                <input class="w-full bg-blue-700 my-4 p-4 rounded-xl text-center text-xl text-white" type="submit" name="store_image" value="Đăng ký">
            </form>
            <a class="ml-20 text-xl" href="">Bạn đã có tài khoản ?</a>
        </div>
</body>
</html>