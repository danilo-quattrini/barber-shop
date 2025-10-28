<x-auth-layout>
    <x-slot:title>Recover Password</x-slot:title>
    <x-form.container type='auth'>
        <div class="flex items-center justify-center">
            <img src="{{asset('barber-shop-logo.svg')}}" alt="barber shop logo" class="w-3/7 m-0"/>
        </div>
        <div class="text-center">
            <h1 class="my-3 text-3xl font-semibold text-slate-700">Recover Your Password</h1>
            <p class="text-slate-500">You Lost your Password? NO PROBLEMA</p>
        </div>
        <div class="m-7">
            <form action="{{route('login')}}" method="POST">
                @csrf
                <!-- Email -->
                <div class="mb-6">
                    <x-form.label for="email">Email</x-form.label>
                    <x-form.input type="email" name="email" id="email" :value="old('email')" placeholder="you@company.com" />
                    <x-form.error name="email"></x-form.error>
                </div>

                <div class="flex items-center justify-center mb-6">
                    <x-button type="submit"> Send Email </x-button>
                </div>
            </form>
        </div>
    </x-form.container>
</x-auth-layout>
