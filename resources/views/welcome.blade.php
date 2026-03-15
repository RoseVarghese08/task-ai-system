<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel App</title>


@vite(['resources/css/app.css', 'resources/js/app.js'])


</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">

<div class="bg-white p-8 rounded shadow text-center">

<h1 class="text-2xl font-bold mb-6">Welcome</h1>

<div class="space-x-4">
    <a href="{{ route('login') }}"
       class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
       Login
    </a>

    <a href="{{ route('register') }}"
       class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">
       Register
    </a>
</div>


</div>

</body>
</html>
