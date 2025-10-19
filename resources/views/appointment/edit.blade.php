<x-layout>
    {{--TODO: Center the cards generated from the appointments table --}}
    <h1 class="text-5xl mb-3 font-bold">Edit Appointment</h1>
    <hr class="w-xl border border-b-slate-500 mb-5">
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
                <x-form.input type="date" name="date" id="date" value="{{$appointment->appointment_date}}"/>
                <x-form.error name="date"></x-form.error>
            </div>

            <div class="mb-6">
                <x-form.label for="time"> Time</x-form.label>
                <x-form.input type="time" name="time" id="time" value="{{$appointment->appointment_time}}"/>
                <x-form.error name="time"></x-form.error>
            </div>

            <div class="mb-6">
                <x-form.label for="price"> Price</x-form.label>
                <x-form.input type="price" name="price" id="price" value="{{$appointment->price}}"/>
                <x-form.error name="price"></x-form.error>
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
</x-layout>
