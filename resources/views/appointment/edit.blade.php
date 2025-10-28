@can('edit', $appointment)
    <x-layout>
        <x-slot:title>Edit Booking</x-slot:title>
        <div class="p-5">
            <div class="mx-auto max-w text-center">
                <h1 class="text-5xl mb-3 font-bold">Edit Booking</h1>
            </div>
            <div class="relative mx-auto mt-12 max-w-3xl rounded-md overflow-hidden">
                <x-form.container>
                    <form action="/appointments/{{$appointment->id}}/edit" method="POST">
                        @csrf
                        @method('PATCH')

                        <div class="mb-6">
                            <x-form.label for="status">Status</x-form.label>
                            <x-form.select
                                name="status"
                                id="status"
                                :options="['pending' => 'Pending', 'confirmed' => 'Confirmed', 'cancelled' => 'Cancelled']"
                                :selected="$appointment->status"
                            />
                            <x-form.error name="status"></x-form.error>
                        </div>

                        <div class="mb-6">
                            <x-form.label for="date"> Date</x-form.label>
                            <x-form.input type="date" name="appointment_date" id="appointment_date" value="{{$appointment->appointment_date}}"/>
                            <x-form.error name="appointment_date"></x-form.error>
                        </div>

                        <div class="mb-6">
                            <x-form.label for="time"> Time</x-form.label>
                            <x-form.input type="text" name="appointment_time" id="appointment_time" value="{{$appointment->appointment_time}}"/>
                            <x-form.error name="appointment_time"></x-form.error>
                        </div>

                        <div class="mb-6">
                            <x-form.label for="notes">Notes</x-form.label>
                            <x-form.input type="text" name="notes" id="notes" value="{{$appointment->notes}}"/>
                            <x-form.error name="notes"></x-form.error>
                        </div>

                        <div class="flex items-center justify-between">
                            <x-button color="white" href="/appointments/{{$appointment->id}}"> Cancel </x-button>
                            <x-button type="submit"> Edit </x-button>
                        </div>
                    </form>
                </x-form.container>
            </div>
        </div>
    </x-layout>
@endcan
