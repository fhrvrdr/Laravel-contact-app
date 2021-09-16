<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

    </style>



</head>

<body>
    <nav>
        <div class="">
              <div class=" flex justify-between h-16 px-10 shadow items-center">
            <div class="flex items-center space-x-8">
                <h1 class="text-xl lg:text-2xl font-bold cursor-pointer">Rehber App</h1>
            </div>
            <div class="flex space-x-4 items-center">
                @if (Route::has('login'))
                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                        @auth
                            <a href="{{ url('/rehber') }}" class="text-gray-800 ">Rehber</a>
                        @else
                            <a href="{{ route('login') }}" class="text-gray-800 mr-2">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"
                                    class="bg-indigo-600 px-4 py-2 rounded text-white hover:bg-indigo-500 ">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
        </div>
        </div>
    </nav>
    <div class="container-fluid">
        <div
            class="relative flex items-top justify-center h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
            <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
                <div class="flex items-center pt-8 sm:justify-start sm:pt-0">
                    <div class="ml-4 text-lg text-gray-500 uppercase tracking-wider">
                        DENEME
                    </div>
                </div>
            </div>
        </div>
    </div>



</body>

</html>
