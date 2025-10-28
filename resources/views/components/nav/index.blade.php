<nav class="relative z-50 grid grid-cols-3 items-center justify-between w-full text-lg py-4 px-10 backdrop-blur text-slate-900">
    <a class="flex items-center justify-start" href="/">
       <img src="{{asset('barber-shop-logo.svg')}}" alt="barber shop logo"/>
    </a>
    <div class="flex justify-center items-center gap-10">
        <x-nav.link href="/" active="{{request()->is('/')}}">
            HOME
        </x-nav.link>
        <x-nav.link href="/services" active="{{request()->is('services')}}">
            SERVICES
        </x-nav.link>
        <x-nav.link href="/about-us" active="{{request()->is('about-us')}}">
            ABOUT US
        </x-nav.link>
    </div>

    <div class="flex justify-end items-center space-x-3">
        @guest
            <x-button color="orange" href="{{route('sign-up')}}">
                SIGN UP
            </x-button>
            <x-button color='white' href="/login">
                LOGIN
            </x-button>
        @endguest
        @auth
            <div class="flex items-center justify-end md:order-2 space-x-2 md:space-x-0">
                <button type="button" class="flex items-center text-base rounded-full md:me-0 focus:ring-4 focus:ring-slate-300" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
                    <span class="sr-only">Open user menu</span>
                    <div class="flex items-center space-x-1">
                        <img class="w-10 h-10" src="{{asset('user-profile.svg')}}" alt="user photo">
                        <svg class="w-4 h-4 ml-1 transition-transform duration-300" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                            <path d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </div>
                </button>
                <!-- Dropdown menu -->
                <div class="z-100 hidden m-5 text-base list-none bg-white divide-y divide-slate-100 rounded-lg border border-slate-900" id="user-dropdown">
                    <div class="px-4 py-3">
                        <span class="block text-base text-slate-900 "> Bonnie Green</span>
                        <span class="block text-base  text-slate-500 truncate ">name@flowbite.com</span>
                    </div>
                    <ul class="py-2" aria-labelledby="user-menu-button">
                        <li>
                            <a href="/appointments" class="block px-4 py-2 text-base text-slate-700 hover:text-orange-500 transition duration-500 uppercase">Appointments</a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 text-base text-slate-700 hover:text-orange-500 transition duration-500 uppercase">Settings</a>
                        </li>
                        <li>
                            <button type="submit" form="sign-out-form" class="block w-full text-left px-4 py-2 text-base text-slate-700 hover:text-orange-500 transition duration-500 cursor-pointer uppercase">Sign out</button>
                        </li>
                    </ul>
                </div>
                <button data-collapse-toggle="navbar-user" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-base/8 text-slate-500 rounded-lg md:hidden hover:bg-slate-100 focus:outline-none focus:ring-2 focus:ring-slate-200" aria-controls="navbar-user" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M1 1h15M1 7h15M1 13h15"/>
                    </svg>
                </button>
            </div>
        @endauth
    </div>

    {{--TODO: Drop down menù for mobile devices to implement--}}
    <button id="open-menu" class="md:hidden active:scale-90 transition">
        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-menu-icon lucide-menu"><path d="M4 5h16"/><path d="M4 12h16"/><path d="M4 19h16"/></svg>
    </button>

    <form method="POST" id="sign-out-form" action="/log-out">
        @csrf
    </form>
</nav>
