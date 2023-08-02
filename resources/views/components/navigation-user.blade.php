<!-- Sidenav -->
<nav
    id="full-screen-example"
    class="fixed left-0 top-0 z-[1035] h-screen w-full -translate-x-full overflow-hidden bg-white shadow-[0_4px_12px_0_rgba(0,0,0,0.07),_0_2px_4px_rgba(0,0,0,0.05)] data-[te-sidenav-hidden='false']:translate-x-0 dark:bg-zinc-800"
    data-te-sidenav-init
    data-te-sidenav-content="#content"
    data-te-sidenav-width="300">
    <div class="mt-6">
        <div id="header-content" class="pl-4">
            Zaloguj się
        </div>
        <hr class="border-gray-300" />
    </div>
</nav>

<nav class="mx-auto max-w-7xl sm:px-6 lg:px-8 p-2 text-center">
    <div class="flex flex-wrap items-center justify-between">
        <div>
            <!-- logo  -->
            <a class="text-3xl font-bold text-white" href="/">
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
            >Sign in</a>
            <a href="{{ route('register') }}" title="Join now" 
            class="bg-black text-white p-2 md:p-4 rounded-xl font-bold px-4 md:px-6"
            >Join now</a>

            <button
                id="toggler"
                class="inline md:hidden md:ml-2"
                data-te-sidenav-toggle-ref
                data-te-target="#full-screen-example"
                data-te-ripple-init>
                <span class="inline [&>svg]:h-8 [&>svg]:w-8 [&>svg]:text-white">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    fill="currentColor"
                    class="h-8 w-8 inline  mb-2">
                    <path
                    fill-rule="evenodd"
                    d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z"
                    clip-rule="evenodd" />
                </svg>
                </span>
            </button>
        </div>
    </div>
</nav>