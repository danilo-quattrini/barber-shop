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
            <div class="text-center">
                <h1 class="my-3 text-3xl font-semibold text-slate-700">Sign Up</h1>
                <p class="text-slate-500">Sign up to take part of our family</p>
            </div>
            <div class="m-7">
                <form action="/sing-up" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="mb-6">
                        <x-form.label for="name" >Name</x-form.label>
                        <x-form.input type="text" name="name" id="name" placeholder="John"  required/>
                    </div>

                    <div class="mb-6">
                        <x-form.label for="email">Email</x-form.label>
                        <x-form.input type="email" name="email" id="email" placeholder="you@company.com"  required/>
                    </div>

                    <div class="mb-6">
                        <div class="flex justify-between mb-2">
                            <x-form.label for="password"> Password</x-form.label>
                            <a href="/" class="text-sm text-slate-400 focus:outline-none focus:text-orange-500 hover:text-orange-500">Forgot password?</a>
                        </div>
                        <x-form.input type="password" name="password" id="password" placeholder="Your Password" required/>
                    </div>

                    {{--Error handling div--}}
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                     </ul>
                    <div class="flex items-center justify-center mb-6">
                        <x-button type="submit"> Sign Up </x-button>
                    </div>
                    <p class="text-sm text-center text-slate-400">Already your customer? <a href="/" class="text-orange-400 focus:outline-none focus:underline focus:text-orange-500">Sign in</a>.</p>
                </form>
            </div>
    </x-form.container>
</body>
