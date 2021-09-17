<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/ap.css') }}">
    <script src="{{ asset('js/ap.js') }}" defer></script>
    <title>Document</title>
</head>
<body>
    <div class="bg-primary-my">
        <div class="container py-4">
            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-12 md:col-span-12 lg:col-span-3 flex justify-center lg:justify-start items-center">
                    <a href="/" class="text-3xl text-white">SecondTime</a>
                </div>
                <div class="col-span-12 md:col-span-12 lg:col-span-6 flex ">
                    <input type="search" class="w-full rounded-lg border border-transparent" placeholder="Search..." aria-label="Search">
                </div>
                <div class="col-span-12 md:col-span-12 lg:col-span-3 flex justify-center lg:justify-end">
                    <a href="#" class="border transition duration-600 text-white hover:bg-white hover:text-gray-800 rounded-lg w-24 h-10 lg:h-full mx-2 flex items-center justify-center">Login</a>                
                    <a href="#" class="transition duration-600 bg-secondary-my hover:bg-yellow-300 rounded-lg w-24 h-10 lg:h-full mx-2 flex items-center justify-center">Sign-up</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>