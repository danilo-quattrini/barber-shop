<x-layout>
    <x-slot:title>Services</x-slot:title>
    <div class="p-5">
        <div class="mx-auto max-w text-center">
            <h2 class="text-base/8 font-light text-orange-600 uppercase">Services</h2>
            <p class="mt-2 text-5xl font-semibold tracking-tight text-balance/12 text-slate-900 sm:text-6xl">Choose the right service for you</p>
        </div>
        <p class="mx-auto mt-6 max-w-5xl text-center text-lg font-medium text-pretty text-slate-500">Choose an affordable service that’s necessary for your needs.</p>
            <div class="mx-auto mt-14 grid max-w-5xl grid-cols-2 items-center gap-8 ">
                @foreach($services as $service)
                    <a href="/appointments/create">
                        <div class="p-8">
                            <h3 id="tier-hobby" class="text-4xl font-light text-slate-900 hover:text-orange-500 transition duration-500 uppercase">{{$service->name}}</h3>
                            <p class="mt-4 text-base font-medium text-slate-600">{{$service->description}}</p>
                            <p class="mt-4 flex items-baseline">
                                <span class="text-3xl font-semibold tracking-tight text-slate-900">{{ '$'.  $service->price }}</span>
                            </p>
                        </div>
                    </a>
                @endforeach
            </div>
    </div>
</x-layout>
