<div class="bg-zinc-700 text-zinc-200 fixed h-full ">
    <ul>
        <li class="py-4 cursor-pointer border-l-4 border-transparent
        hover:text-sky-600  hover:border-sky-600">
            <a class="px-4" href="" title="" >
                <svg xmlns="http://www.w3.org/2000/svg" 
                fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 inline mr-2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0V12a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 12V5.25" />
                </svg>
                Dashboard
            </a>
        </li>
        <li class="py-4 cursor-pointer border-l-4 border-transparent
        hover:text-sky-600  hover:border-sky-600">
            <a  class="px-4" href="" title="">
                <svg xmlns="http://www.w3.org/2000/svg" 
                fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 inline mr-2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 3c2.755 0 5.455.232 8.083.678.533.09.917.556.917 1.096v1.044a2.25 2.25 0 01-.659 1.591l-5.432 5.432a2.25 2.25 0 00-.659 1.591v2.927a2.25 2.25 0 01-1.244 2.013L9.75 21v-6.568a2.25 2.25 0 00-.659-1.591L3.659 7.409A2.25 2.25 0 013 5.818V4.774c0-.54.384-1.006.917-1.096A48.32 48.32 0 0112 3z" />
                </svg>
                Sprzedaż
            </a>
        </li>
        <li class="py-4 cursor-pointer border-l-4 border-transparent
        hover:text-sky-600  hover:border-sky-600">
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
        {{ request()->is('products*') ? 'border-sky-600 bg-zinc-900 text-sky-600':'' }}">
            <a class="px-4" href="{{ route('products.index')}}" title="Produkty / Usługi">
                <svg xmlns="http://www.w3.org/2000/svg" 
                fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 inline mr-2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a2.25 2.25 0 00-2.25-2.25H15a3 3 0 11-6 0H5.25A2.25 2.25 0 003 12m18 0v6a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 18v-6m18 0V9M3 12V9m18 0a2.25 2.25 0 00-2.25-2.25H5.25A2.25 2.25 0 003 9m18 0V6a2.25 2.25 0 00-2.25-2.25H5.25A2.25 2.25 0 003 6v3" />
                </svg>
                Produkty / Usługi
            </a>
        </li>
        <li class="py-4 cursor-pointer border-l-4 border-transparent
        hover:text-sky-600 hover:border-sky-600
        {{ request()->is('settings*') ? 'border-sky-600 bg-zinc-900 text-sky-600':'' }}">
            <a class="px-4" href="{{ route('settings')}}" title="">
                <svg xmlns="http://www.w3.org/2000/svg" 
                fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 inline mr-2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z" />
                </svg>
                Ustawienia
            </a>
        </li>
    </ul>
</div>