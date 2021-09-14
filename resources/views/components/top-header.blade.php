<div class="bg-principal">
    <div class="container py-4">
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-12 md:col-span-12 lg:col-span-3 flex justify-center lg:justify-start items-center">
                <a href="{{Route('home')}}" class="text-3xl text-white">SecondTime</a>
            </div>
            <div class="col-span-12 md:col-span-12 lg:col-span-6 flex ">
                <input type="search" class="w-full rounded-lg border border-transparent" placeholder="Search..." aria-label="Search">
            </div>
            <div class="col-span-12 md:col-span-12 lg:col-span-3 flex justify-center lg:justify-end">
                @if (Route::has('login'))
                @auth
                    <a href="{{ url('/dashboard') }}" class="border transition duration-600 text-white hover:bg-white hover:text-gray-800 rounded-lg w-24 h-10 lg:h-full mx-2 flex items-center justify-center">Dashboard</a>
                @else
                    <a href="{{ url('login') }}" class="border transition duration-600 text-white hover:bg-white hover:text-gray-800 rounded-lg w-24 h-10 lg:h-full mx-2 flex items-center justify-center">Login</a>
                    @if (Route::has('register'))
                    <a href="{{ url('register') }}" class="transition duration-600 bg-secundario hover:bg-yellow-300 rounded-lg w-24 h-10 lg:h-full mx-2 flex items-center justify-center">Sign-up</a>
                    @endif
                @endauth
                @endif
                
            </div>
        </div>
    </div>
</div>