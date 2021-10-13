<form class="my-6" method="POST">
    <x-auth.input>
        <x-icons.user></x-icons.user>
        <input class="ml-2 w-full" type="text" id="username" name="username" placeholder="Your username...">
    </x-auth.input>
    <x-auth.input>
        <x-icons.password></x-icons.password>
        <input class="ml-2 w-full" type="password" id="password" name="password" placeholder="Password">
    </x-auth.input>
    <div class="mb:w-11/12 md:w-10/12 mx-auto mb-6 h-5 flex justify-between">
        <label><input class="mr-1" type="checkbox">Remember me</label>
        <a href="" class="text-indigo-600 underline">Forgot password?</a>                
    </div>
    <x-auth.button>
        <button class="w-full h-full" type="button">Login</button>
    </x-auth.button>                        
</form>