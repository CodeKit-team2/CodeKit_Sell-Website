<nav class="sticky top-0 w-screen p-0 bg-white border-b right-0 z-50">
    <div class="md:w-11/12 m-auto flex justify-between mb:flex mb:w-full mb:m-auto mb:flex-wrap">
        <x-navbar.nav-brand> FashionKit </x-navbar.nav-brand>
        <x-navbar.hamburger></x-navbar.hamburger>
        <div id="dropdown" class="mb:hidden mb:w-full md:flex md:justify-between md:w-auto">
            <div class="mb:flex-wrap mb:flex-row mb:flex mb:w-full mb:text-center md:text-left md:flex md:w-auto">
                <x-navbar.nav-links :href="route('welcome')"> Home </x-navbar.nav-links>
                <x-navbar.nav-links :href="route('shoes')"> Shop </x-navbar.nav-links>
                <x-navbar.nav-links :href="route('welcome')"> About Us </x-navbar.nav-links>
                <x-navbar.nav-links :href="route('welcome')"> Contact </x-navbar.nav-links>   
            </div>
            <div class="mb:flex-wrap mb:flex-row mb:flex mb:w-full mb:border mb:border-t-1 mb:text-center md:text-left md:border-0 md:flex md:w-auto">
                <x-navbar.login> Login </x-navbar.login>
                <x-navbar.cart :href="route('welcome')"></x-navbar.cart>
            </div>      
        </div>
    </div>
</nav> 
