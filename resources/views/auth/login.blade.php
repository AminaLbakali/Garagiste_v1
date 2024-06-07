<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        .overlay {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
        }
    </style>
</head>
<body class="flex items-center justify-center h-screen">
    <div class="w-full max-w-md overlay rounded-xl shadow-2xl">
        <form class="bg-white bg-opacity-90 shadow-md rounded-xl px-8 pt-6 pb-8 mb-4" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-4">
                <h2 class="text-center text-3xl font-extrabold text-indigo-800 mb-6">Welcome Back!</h2>
                <label class="block text-gray-800 text-sm font-bold mb-2" for="email">
                    Email
                </label>
                <input class="shadow appearance-none border border-indigo-300 rounded w-full py-2 px-3 text-gray-800 leading-tight focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent" id="email" type="email" name="email" required>
            </div>
            <div class="mb-6">
                <label class="block text-gray-800 text-sm font-bold mb-2" for="password">
                    Password
                </label>
                <input class="shadow appearance-none border border-indigo-300 rounded w-full py-2 px-3 text-gray-800 mb-3 leading-tight focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent" id="password" type="password" name="password" required>
            </div>
            <div class="flex items-center justify-between">
                <button class="bg-indigo-600 hover:bg-indigo-800 text-white font-bold py-2 px-4 rounded-full focus:outline-none focus:ring-2 focus:ring-indigo-500 w-full" type="submit">
                    Sign In
                </button>
            </div>
        </form>
    </div>
</body>
</html>
