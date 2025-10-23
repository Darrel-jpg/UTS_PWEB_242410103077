<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <title>Login</title>
</head>

<body class="font-sans bg-linear-to-bl from-slate-900 to-slate-700 min-h-screen flex items-center justify-center">
    <div class="bg-white w-full max-w-sm rounded-3xl shadow-2xl p-6">
        <h2 class="text-2xl font-semibold text-gray-700 text-center border-b pb-3 mb-6">
            Login
        </h2>
        <form id="login" action="{{ route('login') }}" method="POST" autocomplete="off">
            @csrf
            <input type="text" id="username" name="username" placeholder="Username" required
                class="w-full px-4 py-3 mb-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-gray-600" />
            <div class="relative mb-3">
                <input type="password" id="password" name="password" placeholder="Password" required
                class="w-full px-4 py-3 pr-10 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-gray-600" />
                <i class="fa-solid fa-eye-slash icon-password absolute right-3 top-1/2 -translate-y-1/2 text-gray-500 cursor-pointer" data-target="password"></i>
            </div>
            <span class="text-red-500 text-sm {{ session('login_error') ? '' : 'hidden' }}">Username atau Password salah, ulangi lagi</span>
            <button type="submit" id="login" onclick="onLogin()" class="w-full bg-gray-700 text-white py-3 mt-4 rounded-xl hover:bg-gray-800 transition duration-200">Login</button>
        </form>
        <p class="text-center text-gray-600 text-sm mt-4">Don't have an account yet?
            <a href="#" class="text-gray-800 hover:underline">Register now</a>
        </p>
    </div>

    <script>
        const iconPassword = document.querySelectorAll('.icon-password')
        iconPassword.forEach(icon => {
            icon.addEventListener('click', () => {
                const targetId = icon.getAttribute('data-target');
                const input = document.getElementById(targetId);

                if (input.type === 'password') {
                    input.type = 'text';
                    icon.classList.remove('fa-eye-slash');
                    icon.classList.add('fa-eye');
                } else {
                    input.type = 'password';
                    icon.classList.remove('fa-eye');
                    icon.classList.add('fa-eye-slash');
                }
            });
        });
    </script>
</body>

</html>
