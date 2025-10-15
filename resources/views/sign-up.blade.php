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
            <div class="max-w-xl mx-auto border rounded-md border-zinc-500">
                <div class="p-9">
                    <div class="text-center">
                        <h1 class="my-3 text-3xl font-semibold text-slate-700">Sign in</h1>
                        <p class="text-gray-500">Sign in to access your account</p>
                    </div>
                    <div class="m-7">

                        <form action="/" method="POST">
                            <div class="mb-6">
                                <label for="email" class="block mb-2 text-sm text-gray-600 ">Email Address</label>
                                <input type="email" name="email" id="email" placeholder="you@company.com" class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300" />
                            </div>
                            <div class="mb-6">
                                <div class="flex justify-between mb-2">
                                    <label for="password" class="text-sm text-gray-600">Password</label>
                                    <a href="/" class="text-sm text-gray-400 focus:outline-none focus:text-indigo-500 hover:text-indigo-500">Forgot password?</a>
                                </div>
                                <input type="password" name="password" id="password" placeholder="Your Password" class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300" />
                            </div>
                            <div class="mb-6">
                                <button type="button" class="w-full px-3 py-4 text-white bg-orange-500 rounded-md focus:bg-orange-600 focus:outline-none">Sign in</button>
                            </div>
                            <p class="text-sm text-center text-gray-400">Don&#x27;t have an account yet? <a href="/" class="text-indigo-400 focus:outline-none focus:underline focus:text-indigo-500">Sign up</a>.</p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
