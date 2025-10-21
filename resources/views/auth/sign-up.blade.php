<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Home</title>
</head>
<body>
    <x-form.container type='auth'>
            <div class="flex items-center justify-center">
                <img src="{{asset('barber-shop-logo.svg')}}" alt="barber shop logo" class="w-xl m-0"/>
            </div>
            <div class="text-center">
                <h1 class="my-3 text-3xl font-semibold text-slate-700">Sign Up</h1>
                <p class="text-slate-500">Sign up to take part of our family</p>
            </div>
            <div class="m-7">
                <form action="/sing-up" method="POST">
                    @csrf
                    <!-- First Name -->
                    <div class="mb-6">
                        <x-form.label for="first_name" >First Name</x-form.label>
                        <x-form.input type="text" name="first_name" id="first_name" :value="old('first_name')" placeholder="John"  />
                        <x-form.error name="first_name"></x-form.error>
                    </div>

                    <!-- Last Name -->
                    <div class="mb-6">
                        <x-form.label for="last_name" >Last Name</x-form.label>
                        <x-form.input type="text" name="last_name" id="last_name" :value="old('last_name')" placeholder="Doe"  />
                        <x-form.error name="last_name"></x-form.error>
                    </div>

                    <!-- Role -->
                    <div class="mb-6">
                        <x-form.label for="role" >Role</x-form.label>
                        <x-form.select
                            name="role"
                            id="role"
                            :options="['admin' => 'Admin', 'guest' => 'Guest']"
                        />
                        <x-form.error name="last_name"></x-form.error>
                    </div>

                    <!-- Email -->
                    <div class="mb-6">
                        <x-form.label for="email">Email</x-form.label>
                        <x-form.input type="email" name="email" id="email" :value="old('email')" placeholder="you@company.com"  />
                        <x-form.error name="email"></x-form.error>
                    </div>

                    <!-- Phone -->
                    <div class="mb-6">
                        <x-form.label for="phone">Phone</x-form.label>
                        <x-form.input type="tel" name="phone" id="phone" :value="old('phone')" placeholder="+39 1234567890"  />
                        <x-form.error name="phone"></x-form.error>
                    </div>

                    <!-- Password -->
                    <div class="mb-6">
                        <x-form.label for="password"> Password</x-form.label>
                        <x-form.input type="password" name="password" id="password" placeholder="Your Password" />
                        <x-form.error name="password"></x-form.error>
                    </div>

                    <div class="mb-6">
                        <x-form.label for="password_confirmation">Confirm Password</x-form.label>
                        <x-form.input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password" />
                        <x-form.error name="password_confirmation"></x-form.error>
                    </div>

                    <div class="flex items-center justify-center mb-6">
                        <x-button type="submit"> Sign Up </x-button>
                    </div>
                    <p class="text-sm text-center text-slate-400">Already your customer? <a href="/" class="text-orange-400 focus:outline-none focus:underline focus:text-orange-500">Sign in</a>.</p>
                </form>
            </div>
    </x-form.container>
</body>
