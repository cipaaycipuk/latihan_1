<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen flex items-center justify-center bg-cover bg-center"
    style='background-image: url("{{ asset("images/BACKGROUND.png")}}");'>

    <div class="w-full max-w-md bg-white/40 backdrop-blur-xl shadow-xl p-10 rounded-2xl">
        <div class="flex justify-center mb-6">
            <img src="{{ asset('images/logo.png') }}" alt="logo" class="w-12">
        </div>

        <h1 class="text-3xl font-bold text-center text-black-800">Welcome Back</h1>
        <p class="text-center text-black-500 mb-8">Welcome back, please log in to your account here!</p>

        <form action="{{ route('login.process') }}" method="POST" enctype="multipart/form-data" class="flex flex-col gap-4">
        @csrf
        <div>
            <label class="text-sm font-semibold text-gray-700">Email</label>
            <input type="email" name="email" required 
            class="w-full border border border-[#758A93] rounded-lg p-2 my-1 focus:ring-blue-400 focus:outline-none">
        </div>

        <div>
            <label class="text-sm font-semibold text-gray-700">Password</label>
            <input type="password" name="password" required 
            class="w-full border border border-[#758A93]  rounded-lg p-2 my-1 focus:ring-blue-400 focus:outline-none">
        </div>
        
        <button type="submit"
        class="w-full bg-[#001BB7] text-white py-2 rounded-lg mt-2 hover:bg-gray-900 transition">Login</button>
        </form>
    </div>
</body>
</html>