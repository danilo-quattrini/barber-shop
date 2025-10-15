<nav class="z-50 flex items-center justify-between w-full py-4 px-8 md:px-16 lg:px-24 xl:px-32 backdrop-blur text-slate-800 text-xl">
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
        <x-button.orange>
            Get started
        </x-button.orange>
        <x-button.white>
            Login
        </x-button.white>
    </div>
    <button id="open-menu" class="md:hidden active:scale-90 transition">
        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-menu-icon lucide-menu"><path d="M4 5h16"/><path d="M4 12h16"/><path d="M4 19h16"/></svg>
    </button>
</nav>
