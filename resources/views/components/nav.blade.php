<nav class="  flex items-top justify-center md:justify-end  bg-gray-100 dark:bg-gray-900  sm:pt-0 ">
    @if (Route::has('login'))
    <div class="  top-0 right-0 px-6 py-3  sm:block">
        @auth
        <a class="text-xl border-[0.1rem]  text-white border-white px-2 py-1 rounded     no-underline   " href="{{ url('/home') }}"><i class="bi bi-person-fill sing"></i> Home</a>
        @else
        <a class="text-xl border-[0.1rem]  text-white border-white px-2 py-1 rounded     no-underline   " href="{{ route('login') }}"><i class="bi bi-box-arrow-in-right"></i> Log in</a>
        @if (Route::has('register'))
        <a class="ml-4 text-xl border-[0.1rem]  text-white border-white px-2 py-1 rounded     no-underline   " href="{{ route('register') }}"><i class="bi bi-box-arrow-in-right"></i> register</a>
        @endif
        @endauth
    </div>
    @endif
</nav>
