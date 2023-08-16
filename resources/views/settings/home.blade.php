<x-app-layout>

    <x-slot name="breadcrumb">
        <nav class="w-full rounded-md">
            <ol class="list-reset flex">
                <li>
                <a
                    href="{{ route('dashboard')}}"
                    class="text-primary transition duration-150 ease-in-out 
                    hover:text-primary-600 focus:text-primary-600 active:text-primary-700 
                    dark:text-primary-400 dark:hover:text-primary-500 dark:focus:text-primary-500 dark:active:text-primary-600">
                    Dashboard
                    </a>
                </li>
                <li>
                <span class="mx-2 text-neutral-500 dark:text-neutral-400">/</span>
                </li>
                <li class="text-neutral-500 dark:text-neutral-400">Ustawienia</li>
            </ol>
        </nav>
    </x-slot>
    
    <x-slot name="header">
        <h2 class="font-semibold text-3xl text-gray-800 leading-tight m-4">
            {{ __('Ustawienia') }}
        </h2>
    </x-slot>

    <div class="w-full">
        <h3 class="font-bold text-xl text-gray-800 leading-tight mt-4">
            {{ __('Użytkownicy') }}
        </h3>
        <p>{{__('Zarządzaj wszystkimi użytkownikami i ich uprawnieniami w CRM, co mogą robić.')}}</p>
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-4">
            <div class="p-6 text-gray-900">
                <div>
                    <h4>Groups</h4>
                    <p>Add, edit or delete groups from CRM</p>
                </div>
                <div>
                    <h4>Roles</h4>
                    <p>Add, edit or delete roles from CRM</p>
                </div>
                <div>
                    <h4>Users</h4>
                    <p>Add, edit or delete users from CRM</p>
                </div>
            </div>
        </div>

        <h3 class="font-bold text-xl text-gray-800 leading-tight mt-4">
            {{ __('Sprzedaż') }}
        </h3>
        <p>Manage all your leads related settings in the CRM</p>
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-4">
            <div class="p-6 text-gray-900">
                <div>
                    <h4>Sources</h4>
                    <p>Add, edit or delete sources from CRM</p>
                </div>
                
                <div>
                    <h4>Types</h4>
                    <p>Add, edit or delete types from CRM</p>
                </div>
            </div>
        </div>

        <h3 class="font-bold text-xl text-gray-800 leading-tight mt-4">
            {{ __('Automation') }}
        </h3>
        <p>Manage all your automation related settings in the CRM</p>
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-4">
            <div class="p-6 text-gray-900">
                <div>
                    <h4>Email templates</h4>
                    <p>Add, edit or delete email templates from CRM</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
