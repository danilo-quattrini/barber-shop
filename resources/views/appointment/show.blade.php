@can('see', $appointment)
<x-layout>
    <x-slot:title>Booking Info</x-slot:title>
    <div class="p-5">
        <div class="mx-auto max-w text-center">
            <h1 class="text-5xl mb-3 font-bold">Booking Info</h1>

        </div>
        <div class="relative mx-auto mt-12 max-w-3xl overflow-hidden">
            <div class="px-4 py-5 sm:px-6">
                <h3 class="text-4xl font-light text-slate-900 uppercase">
                    {{$appointment->user->first_name . " " . $appointment->user->last_name }}
                </h3>
                <h2 class="text-xl font-light text-slate-900 ">
                    {{$appointment->user->email}}
                </h2>
            </div>
            <div class="border-t border-slate-900">
                <dl class="mt-5">
                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-base font-medium text-slate-500">
                            Status
                        </dt>
                        <dd class="mt-1 text-base text-slate-900 sm:mt-0 sm:col-span-2">
                            {{$appointment->status}}
                        </dd>
                    </div>
                    <div class="bg-slate-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-base font-medium text-slate-500">
                            Date
                        </dt>
                        <dd class="mt-1 text-base text-slate-900 sm:mt-0 sm:col-span-2">
                            {{$appointment->appointment_date}}
                        </dd>
                    </div>
                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-base font-medium text-slate-500">
                            Duration
                        </dt>
                        <dd class="mt-1 text-base text-slate-900 sm:mt-0 sm:col-span-2">
                            {{$appointment->appointment_time . ' m'}}
                        </dd>
                    </div>
                    <div class="bg-slate-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-base font-medium text-slate-500">
                            Price
                        </dt>
                        <dd class="mt-1 text-base text-slate-900 sm:mt-0 sm:col-span-2">
                            {{$appointment->service->price . ' $'}}
                        </dd>
                    </div>
                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-base font-medium text-slate-500">
                            Notes
                        </dt>
                        <dd class="mt-1 text-base text-slate-900 sm:mt-0 sm:col-span-2">
                            {{$appointment->notes}}
                        </dd>
                    </div>
                    <div class="flex items-center justify-between bg-white py-5 px-8">
                           <!--- Delete Button -->
                           <div class="float-start">
                               <span class="hidden sm:block">
                                  <x-button form="delete-appointment" type="submit" color="red">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" data-slot="icon" viewBox="0 0 24 24" class="mr-1.5 ml-0.5 size-5" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M3 6h18"></path><path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6">
                                        </path><path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path><line x1="10" x2="10" y1="11" y2="17"></line>
                                        <line x1="14" x2="14" y1="11" y2="17"></line>
                                    </svg>
                                    Delete
                                  </x-button>
                                </span>
                           </div>

                           <!--- Edit Button -->

                                <div class="float-end">
                                   <x-button color="white" href="/appointments/{{$appointment->id}}/edit" >
                                       <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="mr-1.5 ml-0.5 size-5 text-slate-700">
                                           <path d="m2.695 14.762-1.262 3.155a.5.5 0 0 0 .65.65l3.155-1.262a4 4 0 0 0 1.343-.886L17.5 5.501a2.121 2.121 0 0 0-3-3L3.58 13.419a4 4 0 0 0-.885 1.343Z" />
                                       </svg>
                                       Edit
                                   </x-button>
                                </div>
                    </div>
                </dl>
            </div>
        </div>

        <!-- Form to delete the appointment from the DB-->
        <form id="delete-appointment" method="POST" action="/appointments/{{$appointment->id}}">
            @csrf
            @method('DELETE')
        </form>
    </div>
</x-layout>
@endcan
