<x-layout>
    <x-slot:title>New Booking</x-slot:title>
    {{--TODO: Center the cards generated from the appointments table --}}
    <div class="p-5">
        <div class="mx-auto max-w text-center">
            <h1 class="text-5xl mb-3 font-bold">New Booking</h1>
        </div>
        <div class="relative max-w-3xl mx-auto mt-12">
            <x-form.container>
                {{--TODO: COMPLETE THE FORM WITH THE NECESSARY INFO--}}
                <form action="/appointments" method="POST">
                    @csrf
                    <div class="mb-6">
                        <x-form.label for="date">Date</x-form.label>
                        <x-form.input type="date" name="appointment_date" id="appointment_date" :value="today()->toDateString()"/>
                        <x-form.error name="appointment_date"></x-form.error>
                    </div>

                    <div class="mb-6">
                        <x-form.select
                            name="services"
                            id="services"
                            label="services"
                            :options="$services"
                        ></x-form.select>
                    </div>

                    <div class="flex items-center justify-between">
                        <x-button color="white" href="/appointments"> Cancel </x-button>
                        <x-button type="submit"> Create </x-button>
                    </div>
                </form>
            </x-form.container>
        </div>
    </div>
</x-layout>
