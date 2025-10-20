<nav class="z-50 flex items-center justify-between w-full text-sm py-4 px-8 md:px-24 lg:px-32 xl:px-64 backdrop-blur text-slate-800 ">
    <a href="/">
       <img src="{{asset('barber-shop-logo.svg')}}" alt="barber shop logo"/>
    </a>
    <div class="hidden text-base md:flex items-center gap-8 transition duration-500">
        <a href="/" class="hover:text-slate-500 transition">
            Home
        </a>
        <a href="/appointments" class="hover:text-slate-500 transition">
            Appointments
        </a>
        <a href="/pricing" class="hover:text-slate-500 transition">
            Pricing
        </a>
        <a href="/contacts" class="hover:text-slate-500 transition">
            Contacts
        </a>
    </div>

    <div class="hidden md:block space-x-3">
        @guest
            <x-button color="orange" href="/sign-up">
                Sign Up
            </x-button>
            <x-button color='white'>
                Login
            </x-button>
        @endguest
        @auth
            <form method="POST" action="/log-out">
                @csrf
                <x-button type="submit" color='white'>
                    Log Out
                </x-button>
            </form>
        @endauth
    </div>

    {{--TODO: Drop down menù for mobile devices to implement--}}
    <button id="open-menu" class="md:hidden active:scale-90 transition">
        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-menu-icon lucide-menu"><path d="M4 5h16"/><path d="M4 12h16"/><path d="M4 19h16"/></svg>
    </button>
</nav>
