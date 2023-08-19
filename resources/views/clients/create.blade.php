
<x-app-layout>

<x-slot name="breadcrumb">
        <nav class="w-full rounded-md">
            <ol class="list-reset flex">
                <li>
                    <x-link-breadcrumb :message="__('Dashboard')" :href="route('dashboard')" />
                </li>
                <li>
                    <x-slash-breadcrumb />
                </li>
                <li>
                    <x-link-breadcrumb :message="__('Klienci')" :href="route('clients.index')" />
                </li>
                <li>
                    <x-slash-breadcrumb />
                </li>
                <li class="text-neutral-500 dark:text-neutral-400">Dodawanie klienta</li>
            </ol>
        </nav>
    </x-slot>
    
    <x-slot name="header">
        <h2 class="font-semibold text-3xl text-gray-800 leading-tight m-4">
            {{ __('Klienci. Dodawanie klienta') }}
        </h2>
    </x-slot>

    <div class="w-full">
        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Error!</strong> <br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <div class="flex flex-col pr-4 md:mr-4 pb-[120px]">
            <div class="md:flex md:flex-row md:justify-between my-4">
                <div>
                    
                </div>
                <div>
                    <x-link-back :message="__('Back')" :href="route('clients.index')"/>
                </div>
            </div>


            <div class="block max-w-md rounded-lg bg-white p-6 mt-6 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] 
            dark:bg-neutral-700">
                <form action="{{ route('clients.store') }}" method="POST">
                    @csrf
                    
                    <!--name -->
                    <div class="mb-4">
                        <x-input-label for="name" :value="__('Imię i nazwisko*')" />
                        <x-text-input id="name" class="block mt-1 w-full " type="text" 
                        name="name" :value="old('name')" 
                        required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>
                    <!--mail -->
                    <div class="mb-4">
                        <x-input-label for="email" :value="__('E-mail')" />
                        <x-text-input id="email" class="block mt-1 w-full " type="email" 
                        name="email" :value="old('email')" 
                        autocomplete="email" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                    <!--phone -->
                    <div class="mb-4">
                        <x-input-label for="phone" :value="__('Telefon')" />
                        <x-text-input id="phone" class="block mt-1 w-full " type="text" 
                        name="phone" :value="old('phone')" 
                        autocomplete="phone" />
                        <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                    </div>
                    <!--social -->
                    <div class="mb-4">
                        <x-input-label for="social" :value="__('Link do social media')" />
                        <x-text-input id="social" class="block mt-1 w-full " type="text" 
                        name="social" :value="old('social')" 
                        autocomplete="social" />
                        <x-input-error :messages="$errors->get('social')" class="mt-2" />
                    </div>
                    <!--social -->
                    <div class="mb-4">
                        <x-input-label for="firm" :value="__('Firma')" />
                        <x-text-input id="firm" class="block mt-1 w-full " type="text" 
                        name="firm" :value="old('firm')" 
                        autocomplete="firm" />
                        <x-input-error :messages="$errors->get('firm')" class="mt-2" />
                    </div>
                    <!--note -->
                    <div class="mb-4">
                        <x-input-label for="note" :value="__('Notatki')" />
                        <textarea id="note" class="block mt-1 rounded-md w-full border-gray-300" rows="13"
                        name="note"> </textarea>
                        <x-input-error :messages="$errors->get('note')" class="mt-2" />
                    </div>
                
                    <!--Submit button-->
                    <button type="submit" class="relative w-full text-center p-3 bg-blue-600 text-white font-black rounded-xl">
                        {{ __('Dodaj klienta ')}}
                        </button> 
                </form>
            </div>            
        </div>       
        
    </div>
</x-app-layout>
