<a class="rounded bg-emerald-200 pr-6 py-4 text-xs font-medium uppercase leading-normal text-black transition duration-150 ease-in-out 
hover:bg-emerald-400 
focus:z-[3] focus:bg-emerald-400 focus:outline-none focus:ring-0 
" 
href="{{ $href }}" title="{{ $message }}">
    <svg xmlns="http://www.w3.org/2000/svg" 
    fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 inline ml-3">
    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
    </svg>
    {{ $message }}
</a>