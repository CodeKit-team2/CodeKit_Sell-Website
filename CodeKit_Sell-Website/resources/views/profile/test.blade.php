
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
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <script src="{{ URL::asset('js/notify.js') }}"></script>
    <link rel="stylesheet" href="{{asset('css/notify.css')}}">
    <title>Document</title>
</head>
<body>
    <div>
        <div id="toast"></div>     
        <div>
          <div class="showSuccessToast btn btn--success">Show success toast</div>
          <div class="showErrorToast btn btn--danger">Show error toast</div>
        </div>
        
        <script>
            $('.showSuccessToast').click(function () { 
              toast({
              title: "Thành công!",
              message: "Bạn đã đăng ký thành công tài khoản tại F8.",
              type: "success",
              duration: 5000
            });
            });
            $('.showSuccessToast').click(function () { 
                toast({
              title: "Thất bại!",
              message: "Có lỗi xảy ra, vui lòng liên hệ quản trị viên.",
              type: "error",
              duration: 5000
                });
            });        
            </script>
    </div>
</body>
</html>