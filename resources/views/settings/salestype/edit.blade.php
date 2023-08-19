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
                    <x-link-breadcrumb :message="__('Stany realizacji zamowienia')" :href="route('settings.salestype.index')" />
                </li>
                <li>
                    <x-slash-breadcrumb />
                </li>
                <li class="text-neutral-500 dark:text-neutral-400">Edycja</li>
            </ol>
        </nav>
    </x-slot>
    
    <x-slot name="header">
        <h2 class="font-semibold text-3xl text-gray-800 leading-tight m-4">
            {{ __('Stany realizacji zamowienia. Edycja stanu') }}
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
                    <x-link-back :message="__('Back')" :href="route('settings.salestype.index')"/>
                </div>
            </div>


            <div class="block max-w-md rounded-lg bg-white p-6 mt-6 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] 
            dark:bg-neutral-700">
                <form action="{{ route('settings.salestype.update') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{ $type->id }}" />
                    <input type="hidden" name="_method" value="PATCH">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <!--name -->
                    <div class="mb-4">
                        <x-input-label for="type" :value="__('Nazwa stanu*')" />
                        <x-text-input id="type" class="block mt-1 w-full " type="text" 
                        name="type" value="{{ $type->type }}" 
                        autofocus required autocomplete="type" />
                        <x-input-error :messages="$errors->get('type')" class="mt-2" />
                    </div>                
                    <div class="mb-4">
                        <x-input-label for="order" :value="__('Kolejność*')" />
                        <x-text-input id="order" class="block mt-1 w-full " type="text" 
                        name="order" value="{{ $type->order }}" 
                        required autocomplete="order" />
                        <x-input-error :messages="$errors->get('order')" class="mt-2" />
                    </div>                
                    <!--Submit button-->
                    <button type="submit" class="relative w-full text-center p-3 bg-blue-600 text-white font-black rounded-xl">
                        {{ __('Edytuj stan realizacji zamowienia ')}}
                        </button> 
                        
                    
                </form>
                </div>
            
        </div>       
        
    </div>
</x-app-layout>
