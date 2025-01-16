<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UAS PEMWEB 2025</title>

    <link rel="icon" href="{{ asset('img/connections.png') }}" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Montserrat', sans-serif;
        }
    </style>
</head>
<body class="bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500">

    <div class="flex items-center justify-center min-h-screen px-4">
        <div class="bg-white p-12 rounded-xl shadow-2xl max-w-4xl w-full text-center transform transition duration-500 hover:scale-105">
            <div class="mb-16 flex justify-center items-center">
                <img src="{{ asset('img/LogoUP.png') }}" alt="University Logo" class="h-20 mr-4">
                <img src="{{ asset('img/hmik.png') }}" alt="University Logo" class="h-20 mr-4">
            </div>
            
            <h1 class="text-6xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-purple-600 mb-8 flex items-center justify-center">
                <i class="fas fa-laptop-code text-6xl mr-4"></i> UAS PEMWEB 2025
            </h1>

            <p class="text-xl text-gray-800 mb-4 font-medium">Nama: <span class="font-semibold text-gray-900">Alghifari Rasyid Zola</span></p>
            <p class="text-xl text-gray-800 mb-8 font-medium">NIM: <span class="font-semibold text-gray-900">105222006</span></p>

            <a href="/event" 
               class="font-bold inline-block bg-gradient-to-r from-blue-500 to-indigo-500 text-white text-3xl px-10 py-3 rounded-full shadow-xl hover:bg-gradient-to-l focus:outline-none focus:ring-4 focus:ring-blue-300 transform transition duration-300 ease-in-out hover:scale-105">
                Mulai
            </a>

            <div class="mt-8 text-gray-600">
                <p class="text-sm">© 2025 UAS PEMWEB - All rights reserved</p>
            </div>

        </div>
    </div>

</body>
</html>
