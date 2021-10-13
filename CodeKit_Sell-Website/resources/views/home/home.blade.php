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
    <div>
        <div>
            <input type="button" class="w-10 h-10 bg-gray-500" id="btn2" value="Hiển Thị"/>
        </div>
    </div>

    <div class="relative fixed">  
        <div id="content" class="w-1/6 hidden flex justify-center items-center bg-gray-200 antialiased absolute top-5 right-5">
            <div class="flex bg-gray-300 flex-col max-w-2xl mx-auto rounded-xl border border-gray-300 shadow-xl">
              <div class="flex flex-row justify-between p-4  border-b border-gray-200 rounded-tl-lg rounded-tr-lg">
                <img class="method-icon w-2/12" src="https://frontend.tikicdn.com/_desktop-next/static/img/icons/checkout/icon-payment-method-mo-mo.svg" alt="momo">
                <button type="button" class="w-6 h-6" id="btn1">
                <svg id="" fill="none" stroke="currentColor"viewBox="0 0 24 24"xmlns="http://www.w3.org/2000/svg">
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M6 18L18 6M6 6l12 12"
                  ></path>
                </svg>
                </button>
                <script language="javascript">
    
                    document.getElementById("btn1").onclick = function () {
                        document.getElementById("content").style.display = 'none';
                    };
            
                    document.getElementById("btn2").onclick = function () {
                        document.getElementById("content").style.display = 'block';
                    };
            
                </script>
              </div>
              <div class="flex flex-col px-6 py-2 bg-gray-50">
                <p class="mb-2 font-semibold text-gray-700">Số tài khoản</p>
                <form action="" class="flex justify-center mb-4">
                    @csrf
                    <input type="text" class="pr-2 w-4/5 h-8 rounded-md border-2 border-blue-100">
                </form>
                <div class="flex justify-end">
                    <button class="px-4 py-2 text-white font-semibold bg-blue-500 rounded">
                    Save
                    </button>
                </div>
            </div>
          </div>
    </div>
</body>
</html>
