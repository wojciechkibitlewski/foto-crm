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
            <a href="{{ route('home') }}" title="{{__('home.home')}}" class="text-center">
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

