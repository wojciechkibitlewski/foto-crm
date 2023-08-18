<x-app-layout>

    <x-slot name="breadcrumb">
        <nav class="w-full rounded-md">
            <ol class="list-reset flex">
                <li>
                    <a href="{{ route('dashboard')}}"
                    class="text-primary transition duration-150 ease-in-out 
                    hover:text-primary-600 focus:text-primary-600 active:text-primary-700 
                    dark:text-primary-400 dark:hover:text-primary-500 dark:focus:text-primary-500 dark:active:text-primary-600">
                    Dashboard
                    </a>
                </li>
                <li>
                    <span class="mx-2 text-neutral-500 dark:text-neutral-400">/</span>
                </li>
                <li class="text-neutral-500 dark:text-neutral-400">
                    Ustawienia
                </li>
            </ol>
        </nav>
    </x-slot>
    
    <x-slot name="header">
        <h2 class="font-semibold text-3xl text-gray-800 leading-tight m-4">
            {{ __('Ustawienia') }}
        </h2>
    </x-slot>

    <div class="w-full pb-[120px]">
        @include('settings.home.users')
        @include('settings.home.leads')
        @include('settings.home.products')
        @include('settings.home.automation')
    </div>
</x-app-layout>
