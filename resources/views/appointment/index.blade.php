<x-layout>
    <x-slot:title>Bookings</x-slot:title>
        <div class="p-5">
            <div class="mx-auto max-w text-center">
                <h2 class="text-base/8 font-light text-orange-600 uppercase">View all of your</h2>
                <h1 class="mt-2 text-5xl font-semibold tracking-tight text-balance/12 text-slate-900 sm:text-6xl">Bookings</h1>
            </div>

            <div class="relative max-w-3xl mx-auto mt-12">
                @if(sizeof($appointments) == 0)
                    <div class="flex text-center items-center justify-center my-5">
                        <span class="text-xl">No Booking...</span>
                    </div>
                @endif
                @foreach($appointments as $appointment)
                    <a href="{{'appointments/' . $appointment->id}}">
                        <div class="flex items-center max-w-3xl my-5 py-6 border-b-1 border-b-slate-900">
                            <div>
                                <h5 class="mb-2 text-2xl font-semibold tracking-tight text-slate-900  hover:text-orange-500 transition duration-500 uppercase">{{$appointment->status}}</h5>
                                <p class="mb-3 font-normal text-slate-700 dark:text-slate-700">{{$appointment->notes}}</p>

                                <!--Service from the Booking-->
                                <div class="inline-flex h-6 max-w-max cursor-default items-center justify-start gap-1 rounded-md px-2 py-1 text-center text-sm font-semibold border border-slate-700 text-slate-700 uppercase">
                                    <span>{{$appointment->service->name}}</span>
                                </div>

                                <div class="flex items-center justify-start mt-5 gap-3">
                                    <!-- User info -->
                                    <div class="flex items-center justify-center text-sm text-slate-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#90a1b9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-1.5 size-5 shrink-0">
                                            <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2" clip-rule="evenodd" fill-rule="evenodd"></path><circle cx="12" cy="7" r="4"></circle>
                                        </svg>
                                        <span>{{$appointment->user->first_name . " " . $appointment->user->last_name}}</span>
                                    </div>

                                    <!-- Appointment info -->
                                    <div class=" flex items-center text-sm text-slate-500">
                                        <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="w-5 h-5 text-slate-400">
                                            <path d="M5.75 2a.75.75 0 0 1 .75.75V4h7V2.75a.75.75 0 0 1 1.5 0V4h.25A2.75 2.75 0 0 1 18 6.75v8.5A2.75 2.75 0 0 1 15.25 18H4.75A2.75 2.75 0 0 1 2 15.25v-8.5A2.75 2.75 0 0 1 4.75 4H5V2.75A.75.75 0 0 1 5.75 2Zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75Z" clip-rule="evenodd" fill-rule="evenodd" />
                                        </svg>
                                        <span>{{$appointment->appointment_date}}</span>
                                    </div>

                                    <!-- Total Price -->
                                    <div class="flex items-center gap-2 text-sm text-slate-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="#90a1b9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 text-slate-400" viewBox="0 0 24 24">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <path d="M16 8h-6a2 2 0 1 0 0 4h4a2 2 0 1 1 0 4H8"></path>
                                            <path d="M12 18V6"></path>
                                        </svg>
                                        <span>{{$appointment->service->price . " $"}}</span>
                                    </div>

                                    <!-- Time Duration -->
                                    <div class="flex items-center gap-2 text-sm text-slate-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="#90a1b9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 text-slate-400" viewBox="0 0 24 24">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <polyline points="12 6 12 12 16 14"></polyline>
                                        </svg>
                                        <span>{{$appointment->appointment_time . ' minutes'}}</span>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
                <div class="grid grid-cols-2 max-w-3xl">
                    <div class="flex items-center justify-start">
                        <x-button color="orange" href="/appointments/create">New Booking</x-button>
                    </div>
                    <div class="flex items-center justify-end ">
                        {{$appointments->links()}}
                    </div>

                </div>
            </div>
        </div>
</x-layout>
