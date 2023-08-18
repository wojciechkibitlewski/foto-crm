<!-- Sidenav -->
<nav class="!fixed top-0 left-0 height-screen 
    z-[1035] w-60 -translate-x-full overflow-hidden 
    bg-gray-50 text-base p-4
    shadow-[0_4px_12px_0_rgba(0,0,0,0.07),_0_2px_4px_rgba(0,0,0,0.05)] 
    data-[te-sidenav-hidden='false']:translate-x-0 dark:bg-zinc-950"
    id="sidenav-1"
    data-te-sidenav-init
    data-te-sidenav-hidden="true"
    data-te-sidenav-position="absolute"
    data-te-sidenav-content="#content"
    data-te-sidenav-width="320">
        
        <div class="relative p-4 mt-4" id="header-content">

        </div>
        <hr class="border-gray-300" />
        <div>
            <ul class="relative m-0 list-none text-base" data-te-sidenav-menu-ref>
                <li class="py-4 cursor-pointer border-l-4 border-transparent
                hover:text-sky-600  hover:border-sky-600
                {{ request()->is('dashboadr') ? 'bg-zinc-100 text-sky-600':'' }}">
                    <a class="px-4" href="" title="" >
                        <svg xmlns="http://www.w3.org/2000/svg" 
                        fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 inline mr-2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0V12a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 12V5.25" />
                        </svg>
                        Dashboard
                    </a>
                </li>
                <li class="py-4 cursor-pointer border-l-4 border-transparent
                hover:text-sky-600  hover:border-sky-600
                {{ request()->is('sales*') ? 'bg-zinc-100 text-sky-600':'' }}">
                    <a  class="px-4" href="" title="">
                        <svg xmlns="http://www.w3.org/2000/svg" 
                        fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 inline mr-2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 3c2.755 0 5.455.232 8.083.678.533.09.917.556.917 1.096v1.044a2.25 2.25 0 01-.659 1.591l-5.432 5.432a2.25 2.25 0 00-.659 1.591v2.927a2.25 2.25 0 01-1.244 2.013L9.75 21v-6.568a2.25 2.25 0 00-.659-1.591L3.659 7.409A2.25 2.25 0 013 5.818V4.774c0-.54.384-1.006.917-1.096A48.32 48.32 0 0112 3z" />
                        </svg>
                        Sprzedaż
                    </a>
                </li>
                <li class="py-4 cursor-pointer border-l-4 border-transparent
                hover:text-sky-600  hover:border-sky-600
                {{ request()->is('clients*') ? 'bg-zinc-100 text-sky-600':'' }}">
                    <a class="px-4" href="" title="">
                        <svg xmlns="http://www.w3.org/2000/svg" 
                        fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 inline mr-2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                        </svg>
                        Klienci
                    </a>
                </li>
                <li class="py-4 cursor-pointer border-l-4 border-transparent
                hover:text-sky-600  hover:border-sky-600
                {{ request()->is('products*') ? 'bg-zinc-100 text-sky-600':'' }}">
                    <a class="px-4" href="{{ route('products.index')}}" title="">
                        <svg xmlns="http://www.w3.org/2000/svg" 
                        fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 inline mr-2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a2.25 2.25 0 00-2.25-2.25H15a3 3 0 11-6 0H5.25A2.25 2.25 0 003 12m18 0v6a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 18v-6m18 0V9M3 12V9m18 0a2.25 2.25 0 00-2.25-2.25H5.25A2.25 2.25 0 003 9m18 0V6a2.25 2.25 0 00-2.25-2.25H5.25A2.25 2.25 0 003 6v3" />
                        </svg>
                        Produkty / Usługi
                    </a>
                </li>
                <li class="py-4 cursor-pointer border-l-4 border-transparent
                hover:text-sky-600 hover:border-sky-600
                {{ request()->is('settings*') ? 'bg-zinc-100 text-sky-600':'' }}">
                    <a class="px-4" href="{{ route('settings')}}" title="">
                        <svg xmlns="http://www.w3.org/2000/svg" 
                        fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 inline mr-2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z" />
                        </svg>
                        Ustawienia
                    </a>
                </li>
            </ul>
            <hr class="border-gray-300" />

            <ul class="relative m-0 list-none text-base" data-te-sidenav-menu-ref>

            <li class="relative">
            <a
              class="group flex h-14 cursor-pointer items-center truncate rounded-[5px] p-2 text-gray-700 outline-none transition duration-300 ease-linear hover:bg-primary-400/10 hover:text-primary-600 hover:outline-none focus:bg-primary-400/10 focus:text-primary-600 focus:outline-none active:bg-primary-400/10 active:text-primary-600 active:outline-none data-[te-sidenav-state-active]:text-primary-600 data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
              data-te-sidenav-link-ref>
              
              <span>{{ __('home.language_version')}}</span>
              <span
                class="absolute right-0 ml-auto mr-[0.8rem] transition-transform duration-300 motion-reduce:transition-none [&>svg]:h-3 [&>svg]:w-3 [&>svg]:fill-gray-600 group-hover:[&>svg]:fill-primary-600 group-focus:[&>svg]:fill-primary-600 group-active:[&>svg]:fill-primary-600 group-[te-sidenav-state-active]:[&>svg]:fill-primary-600 dark:[&>svg]:fill-gray-300"
                data-te-sidenav-rotate-icon-ref>
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 448 512">
                  <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                  <path
                    d="M201.4 374.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 306.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z" />
                </svg>
              </span>
            </a>
            <ul
              class="relative m-0 hidden list-none p-0 data-[te-collapse-show]:block"
              data-te-sidenav-collapse-ref>
                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                <li class="relative">
                    <div class="block cursor-pointer py-2 pl-4 text-gray-700  transition duration-300 ease-linear hover:bg-primary-400/10 hover:text-primary-600 hover:outline-none focus:bg-primary-400/10 focus:text-primary-600 focus:outline-none active:bg-primary-400/10 active:text-primary-600 active:outline-none data-[te-sidenav-state-active]:text-primary-600 data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
                    data-te-sidenav-link-ref>
                        <a 
                        rel="alternate" 
                        hreflang="{{ $localeCode }}" 
                        href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
                        >{{ $properties['native'] }}</a>
                    </div>
                </li>
                @endforeach
              
            </ul>
          </li>
            
            
                
        </ul>
    </div>
    
</nav>
    
    <!-- Sidenav -->

<div class="md:hidden w-screen fixed bottom-0 left-0 rounded-t-xl drop-shadow-[0_35px_35px_rgba(0,0,0,0.75)] p-2 py-6 bg-white">
    <div class="flex flex-row justify-around">
        <div class="basis-1/3">
            <bottom 
            data-te-sidenav-toggle-ref
            data-te-target="#sidenav-1"
            aria-controls="#sidenav-1"
            aria-haspopup="true"
            class="text-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" 
                class="w-6 h-6  mx-auto">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM18.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                </svg>

                <p>{{__('home.menu')}}</p>
            </bottom>
        </div>
        <div class="basis-1/3">

            <a href="{{ route('dashboard') }}" title="{{__('home.home')}}" class="text-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" 
                class="w-6 h-6 mx-auto">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                </svg>
                <p>{{__('home.home')}}</p>
            </a>
        </div>
        <div class="basis-1/3">
            <a href="{{ route('dashboard') }}" title="{{__('home.nav_bottom_account')}}" class="text-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" 
                class="w-6 h-6  mx-auto">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                </svg>

                <p>{{__('home.nav_bottom_account')}}</p>
            </a>
        </div>
    </div>
</div>

