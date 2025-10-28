<x-layout>
    <x-slot:title>Home</x-slot:title>
    <section class="relative flex flex-col justify-center items-center min-h-screen w-full bg-cover bg-center bg-no-repeat bg-[url('../../public/barber-shop-example-bg-image.jpg')]">
        <div class="absolute inset-0 bg-black/60"></div>
        <main class="relative z-10 flex flex-col justify-center items-center text-center max-md:px-2">
            <h2 class="text-base mt-12 font-light text-orange-500 uppercase">Home</h2>
            <h1 class="text-white text-center mt-2 text-8xl leading-[68px] md:text-6xl md:leading-[80px] font-bold max-w-5xl uppercase">
                Barber Shop
            </h1>
            <p class="text-white text-center text-base max-w-lg mt-2">
                The best barber shop for men since the first '90
            </p>
            <div class="flex justify-center items-center gap-4 mt-8">
                <x-button color="white" href="/services">
                    Services
                </x-button>
                <x-button href="/appointments" color="orange" class="flex items-center">
                    Book
                </x-button>
            </div>
        </main>
    </section>
</x-layout>
