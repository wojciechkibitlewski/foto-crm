<!-- Sidenav -->
<nav class="absolute left-0 top-0 z-[1035] w-60 -translate-x-full overflow-hidden 
    bg-zinc-950 text-white text-base 
    p-6
    shadow-[0_4px_12px_0_rgba(0,0,0,0.07),_0_2px_4px_rgba(0,0,0,0.05)] 
    data-[te-sidenav-hidden='false']:translate-x-0 dark:bg-zinc-950"
    style="min-height:100vh !important"
    id="sidenav-1"
    data-te-sidenav-init
    data-te-sidenav-hidden="true"
    data-te-sidenav-position="absolute"
    data-te-sidenav-content="#content"
    data-te-sidenav-width="320">
    <ul class="relative m-0 list-none px-[0.2rem]" data-te-sidenav-menu-ref>
        <li class="relative">
        <a
            href="#"
            class=""
            data-te-sidenav-link-ref>
            Link 01
        </a>
        </li>
        <li class="relative">
        <a
            href="#"
            class=""
            data-te-sidenav-link-ref>
            Link 02
        </a>
        </li>
    </ul>
    </nav>
    
    <!-- Sidenav -->

    <div class="md:hidden w-screen sticky bottom-0 rounded-t-xl drop-shadow-[0_35px_35px_rgba(0,0,0,0.75)] p-2 py-6 bg-white">
       

    
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

                    <p>Menu</p>
                </bottom>
            </div>
            <div class="basis-1/3">
                <a href="{{ route('home') }}" title="" class="text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" 
                    class="w-6 h-6 mx-auto">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                    </svg>
                    <p>Home</p>
                </a>
            </div>
            <div class="basis-1/3">
                <a href="{{ route('dashboard') }}" title="" class="text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" 
                    class="w-6 h-6  mx-auto">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                    </svg>

                    <p>Account</p>
                </a>
            </div>
       </div>
    </div>
