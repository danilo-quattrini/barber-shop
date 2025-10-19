<x-layout>
    {{--TODO: Center the cards generated from the appointments table --}}
    <h1 class="text-5xl mb-3 font-bold">Edit Appointment</h1>
    <hr class="w-xl border border-b-slate-500 mb-5">
    <x-form.container>
        <form action="/appointments/{{$appointment->id}}/edit" method="POST">
            @csrf
            @method('PATCH')
            <div class="mb-6">
                <x-form.label for="title" >Title</x-form.label>
                <x-form.input type="text" name="title" id="title" value="{{$appointment->title}}" />
                <x-form.error name="title"></x-form.error>
            </div>

            <div class="mb-6">
                <x-form.label for="body">Body</x-form.label>
                <x-form.input type="text" name="body" id="body" value="{{$appointment->body}}"  required/>
                <x-form.error name="body"></x-form.error>
            </div>

            <div class="mb-6">
                <x-form.label for="date"> Date</x-form.label>
                <x-form.input type="date" name="date" id="date" value="{{$appointment->appointment_date}}" required/>
                <x-form.error name="date"></x-form.error>
            </div>

            <div class="flex items-center justify-between">
                <x-button color="white" href="/appointments/{{$appointment->id}}"> Cancel </x-button>
                <x-button type="submit"> Edit </x-button>
            </div>
        </form>
    </x-form.container>
</x-layout>
