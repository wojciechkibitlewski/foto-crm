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
            <a href="{{ route('login') }}" title="{{ __('auth.signin')}}" 
            class="hidden md:inline bg-white p-4 rounded-xl font-bold px-6 mr-4"
            >{{ __('auth.signin')}}</a>
            <a href="{{ route('register') }}" title="{{ __('auth.joinnow')}}" 
            class="bg-red-700 text-white p-3 md:p-4 rounded-xl font-bold px-4 mr-2 md:px-6"
            >{{ __('auth.joinnow')}}</a>

        </div>
    </div>
</nav>