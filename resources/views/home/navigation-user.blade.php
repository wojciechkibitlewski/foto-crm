<nav 
    class="fixed top-0 flex w-full flex-wrap items-center justify-between 
    bg-[#FBFBFB] py-1 shadow-md shadow-black/5 
    dark:bg-neutral-600 dark:shadow-black/10 "
    data-te-navbar-ref>
    <div class="mb-2">
        <div class=""
        id="navbarSupportedContent1"
        data-te-collapse-item>
            <!-- logo  -->
            <a class="text-xl font-bold text-black" href="{{ route('dashboard') }}">
                <div class="inline ml-2 flex items-center">
                    <div class="text-4xl font-thin">[ </div> 
                    <div class="m-2 mt-4">App</div> 
                    <div class="text-4xl font-thin">]</div>
                </div>
            </a>
        </div>
    </div>
        
    <div class="">
        <div class="relative" data-te-dropdown-position="dropstart">
            <!-- Second dropdown trigger -->
            <a
            class="hidden-arrow flex items-center whitespace-nowrap transition duration-150 ease-in-out motion-reduce:transition-none"
            href="#"
            id="dropdownMenuButton2"
            role="button"
            data-te-dropdown-toggle-ref
            aria-expanded="false"
            data-te-ripple-init
            data-te-ripple-color="light">
                <!-- User avatar -->
                <img class="w-8 h-8 md:w-10 md:h-10 inline" src="{{ Avatar::create(Auth::user()->name)->toBase64() }}" />   
                <div class=" ml-2">
                    <span class="block md:text-lg font-bold -mb-1 ">Dzień dobry</span>
                    <span class="text-sm md:text-base block">{{ Auth::user()->name }}</span>
                </div>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" 
                    fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-`10` h-10">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 12.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 18.75a.75.75 0 110-1.5.75.75 0 010 1.5z" />
                    </svg>
                </div>
            </a>
            <!-- Second dropdown menu -->
            
            <ul
            class="absolute z-[1000] float-left m-0 mt-4 hidden w-[250px] list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg dark:bg-neutral-700 [&[data-te-dropdown-show]]:block"
            aria-labelledby="dropdownMenuButton2"
            data-te-dropdown-menu-ref>
            <!-- Second dropdown menu items -->
            <li>
                <a
                class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-white/30"
                href="{{route('profile.edit')}}"
                data-te-dropdown-item-ref
                >{{ __('Profile') }}</a
                >
            </li>
            
            <li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-dropdown-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-dropdown-link>
                </form>
            </li>
            </ul>
        </div>
    </div>
  
</nav>