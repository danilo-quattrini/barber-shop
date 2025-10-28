<x-auth-layout>
    <x-slot:title>Login</x-slot:title>
    <x-form.container type='auth'>
            <div class="flex items-center justify-center">
                <img src="{{asset('barber-shop-logo.svg')}}" alt="barber shop logo" class="w-3/7 m-0"/>
            </div>
            <div class="text-center">
                <h1 class="my-3 text-3xl font-semibold text-slate-700">Sign In</h1>
                <p class="text-slate-500">Welcome back, how are you?</p>
            </div>
            <div class="m-7">
                <form action="{{route('login')}}" method="POST">
                    @csrf
                    <!-- Email -->
                    <div class="mb-6">
                        <x-form.label for="email">Email</x-form.label>
                        <x-form.input type="email" name="email" id="email" :value="old('email')" placeholder="you@company.com"  />
                        <x-form.error name="email"></x-form.error>
                    </div>

                    <!-- Password -->
                    <div class="mb-6">
                        <div class="flex items-center justify-between">
                            <x-form.label for="password"> Password</x-form.label>
                            <a class="text-sm text-slate-600 mb-3" href="{{route('login.recovery')}}">Forgot your password?</a>
                        </div>
                        <x-form.input type="password" name="password" id="password" placeholder="Your Password" />
                        <x-form.error name="password"></x-form.error>
                    </div>


                    <div class="flex items-center justify-center mb-6">
                        <x-button type="submit"> Sign In</x-button>
                    </div>
                    <p class="text-sm text-center text-slate-400">First time with us? <a href="{{route('sign-up')}}" class="text-orange-400 focus:outline-none focus:underline focus:text-orange-500">Sign up</a>.</p>
                </form>
            </div>
    </x-form.container>
</x-auth-layout>
