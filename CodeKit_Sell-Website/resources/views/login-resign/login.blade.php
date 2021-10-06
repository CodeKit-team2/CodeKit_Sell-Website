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
        <form action="{{route('check')}}" method="POST">
            @csrf
                    <input class="w-full my-4 p-4 rounded-xl" type="text" name="email" placeholder="Email hoăc số điện thoại" required>
                    <input class="w-full my-4 p-4 rounded-xl" type="password" name="password" placeholder="Mật khẩu" required>
                    <input class="w-full bg-blue-700 my-4 p-4 rounded-xl text-center text-xl text-white" type="submit" name="sub" value="Đăng nhập">
                        <a href=" " class="flex justify-center">
                        <div class="flex justify-center" method="post">
                            <div class=" bg-red-500 my-4 p-4 rounded-xl text-center text-xl text-white">
                                Tạo tài khoản
                            </div>
                        </div>
        </form>
    </div>
</body>
</html>
