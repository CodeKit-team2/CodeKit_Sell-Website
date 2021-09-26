<form method="POST" class="my-6">
    <x-auth.input>
        <x-icons.user></x-icons.user>
        <input class="ml-2 h-10 w-full" type="text" name="fullname" placeholder="Fullname">
    </x-auth.input>
    <x-auth.input> 
        <select class="w-full h-10" name="gender" placeholder="Gender">
            <option value="" disabled selected>Gender:</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="complicated">Complicated</option>
        </select>
    </x-auth.input>
    <x-auth.input>
        <x-icons.mail></x-icons.mail>
        <input class="ml-2 h-10 w-full" type="email" name="email" placeholder="Email">
    </x-auth.input>
    <x-auth.input>
        <x-icons.password></x-icons.password>
        <input class="ml-2 h-10 w-full" type="password" id="password" name="password" placeholder="Password">
    </x-auth.input>
    <x-auth.button>
        <button class="w-full h-full" type="button">Sign Up</button>
    </x-auth.button>     
</form>