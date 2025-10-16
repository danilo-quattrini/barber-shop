<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Home</title>
</head>
<body>
    <div class="flex items-center min-h-screen bg-white">
        <div class="container mx-auto">
            <div class="max-w-xl mx-auto border rounded-md border-slate-500">
                <div class="p-9">
                    <div class="text-center">
                        <h1 class="my-3 text-3xl font-semibold text-slate-700">Sign Up</h1>
                        <p class="text-slate-500">Sign up to take part of our family</p>
                    </div>
                    <div class="m-7">

                        <form action="/sing-up" method="POST">
                            @csrf
                            @method('PATCH')
                            <div class="mb-6">
                                <label for="name" class="block mb-2 text-sm text-slate-600 ">Name</label>
                                <input type="text" name="name" id="name" placeholder="Jhon" class="w-full px-3 py-2 placeholder-slate-300 border border-slate-500 rounded-md focus:outline-none focus:ring focus:ring-orange-100 focus:border-orange-300" required/>
                            </div>

                            <div class="mb-6">
                                <label for="email" class="block mb-2 text-sm text-slate-600 ">Email Address</label>
                                <input type="email" name="email" id="email" placeholder="you@company.com" class="w-full px-3 py-2 placeholder-slate-300 border border-slate-500 rounded-md focus:outline-none focus:ring focus:ring-orange-100 focus:border-orange-300" required/>
                            </div>

                            <div class="mb-6">
                                <div class="flex justify-between mb-2">
                                    <label for="password" class="text-sm text-slate-600">Password</label>
                                    <a href="/" class="text-sm text-slate-400 focus:outline-none focus:text-orange-500 hover:text-orange-500">Forgot password?</a>
                                </div>
                                <input type="password" name="password" id="password" placeholder="Your Password" class="w-full px-3 py-2 placeholder-slate-300 border border-slate-500 rounded-md focus:outline-none focus:ring focus:ring-orange-100 focus:border-orange-300" required/>
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
                </div>
            </div>
        </div>
    </div>
</body>
