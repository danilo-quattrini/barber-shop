<nav class="z-50 flex items-center justify-between w-full py-4 px-6 md:px-16 lg:px-24 xl:px-32 backdrop-blur text-slate-800 text-xl">
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
        <button class="inline-flex items-center rounded-md text-sm bg-orange-500 px-6 py-3 font-semibold text-white shadow-xs hover:bg-orange-600 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-orange-600">
            Get started
        </button>
        <button class="inline-flex px-6 py-3 rounded-md text-sm text-gray-700 focus:bg-gray-100 shadow-xs outline outline-black/5 transition transition-discrete [--anchor-gap:--spacing(2)] data-closed:scale-95 data-closed:transform data-closed:opacity-0 data-enter:duration-200 data-enter:ease-out data-leave:duration-75 data-leave:ease-in">
            Login
        </button>
    </div>
    <button id="open-menu" class="md:hidden active:scale-90 transition">
        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-menu-icon lucide-menu"><path d="M4 5h16"/><path d="M4 12h16"/><path d="M4 19h16"/></svg>
    </button>
</nav>
