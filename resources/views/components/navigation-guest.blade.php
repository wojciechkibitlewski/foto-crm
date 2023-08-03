<nav class="mx-auto max-w-7xl sm:px-6 lg:px-8 p-2 text-center">
    <div class="flex flex-wrap items-center justify-between">
        <div>
            <!-- logo  -->
            <a class="text-3xl font-bold text-white" href="{{ route('home') }}">
                <div class="inline ml-2 flex items-center">
                    <div class="text-5xl font-thin">[ </div> 
                    <div class="m-2 mt-4">App</div> 
                    <div class="text-5xl font-thin">]</div>
                </div>
            </a>

        </div>
        <div class="mt-3">
            <a href="{{ route('login') }}" title="Sign in" 
            class="hidden md:inline bg-white p-4 rounded-xl font-bold px-6 mr-4"
            >{{ __('auth.signin')}}</a>
            <a href="{{ route('register') }}" title="Join now" 
            class="bg-red-700 text-white p-2 md:p-4 rounded-xl font-bold px-4 md:px-6"
            >{{ __('auth.joinnow')}}</a>

        </div>
    </div>
</nav>