<x-layout>
    {{--TODO: Center the cards generated from the appointments table --}}
    <h1 class="text-5xl mb-3 font-bold">Appointments</h1>
    <hr class="w-xl border border-b-slate-500">
    @foreach($appointments as $appointment)
        <div class="flex items-center max-w-3xl my-5 p-6 bg-white border border-slate-500 rounded-lg shadow-sm">
            <div>
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-slate-900 ">{{$appointment->title}}</h5>
                </a>
                <p class="mb-3 font-normal text-slate-700 dark:text-slate-700">{{$appointment->body}}</p>

                {{--User info--}}

                <div class="flex items-center justify-start gap-3">
                    <div class="mt-2 flex items-center text-sm text-slate-500">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#90a1b9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-1.5 size-5 shrink-0">
                            <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2" clip-rule="evenodd" fill-rule="evenodd"></path><circle cx="12" cy="7" r="4"></circle>
                        </svg>
                        {{$appointment->user->name}}
                    </div>
                    <div class="mt-2 flex items-center text-sm text-slate-500">
                        <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="mr-1.5 size-5 shrink-0 text-slate-400">
                            <path d="M5.75 2a.75.75 0 0 1 .75.75V4h7V2.75a.75.75 0 0 1 1.5 0V4h.25A2.75 2.75 0 0 1 18 6.75v8.5A2.75 2.75 0 0 1 15.25 18H4.75A2.75 2.75 0 0 1 2 15.25v-8.5A2.75 2.75 0 0 1 4.75 4H5V2.75A.75.75 0 0 1 5.75 2Zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75Z" clip-rule="evenodd" fill-rule="evenodd" />
                        </svg>
                        {{$appointment->appointment_date}}
                    </div>
                </div>
                <div>
                    <div class="mt-5 flex items-center justify-end gap-x-3">
                        <span class="hidden sm:block">
                          <x-button type="button" color="white">
                            <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="mr-1.5 -ml-0.5 size-5 text-slate-700">
                              <path d="m2.695 14.762-1.262 3.155a.5.5 0 0 0 .65.65l3.155-1.262a4 4 0 0 0 1.343-.886L17.5 5.501a2.121 2.121 0 0 0-3-3L3.58 13.419a4 4 0 0 0-.885 1.343Z" />
                            </svg>
                              {{--TODO: new route for the edit appointment page--}}
                            Edit
                          </x-button>
                        </span>

                        <span class="ml-3 hidden sm:block">
                          <x-button type="button" color="white">
                            <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="mr-1.5 -ml-0.5 size-5 text-slate-700">
                              <path d="M12.232 4.232a2.5 2.5 0 0 1 3.536 3.536l-1.225 1.224a.75.75 0 0 0 1.061 1.06l1.224-1.224a4 4 0 0 0-5.656-5.656l-3 3a4 4 0 0 0 .225 5.865.75.75 0 0 0 .977-1.138 2.5 2.5 0 0 1-.142-3.667l3-3Z" />
                              <path d="M11.603 7.963a.75.75 0 0 0-.977 1.138 2.5 2.5 0 0 1 .142 3.667l-3 3a2.5 2.5 0 0 1-3.536-3.536l1.225-1.224a.75.75 0 0 0-1.061-1.06l-1.224 1.224a4 4 0 1 0 5.656 5.656l3-3a4 4 0 0 0-.225-5.865Z" />
                            </svg>
                              {{--TODO: new route to see the appointment page with their info--}}
                            View
                          </x-button>
                        </span>

                    </div>
                </div>
            </div>
        </div>
    @endforeach
</x-layout>
