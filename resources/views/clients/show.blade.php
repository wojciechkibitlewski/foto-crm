
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
                <li class="text-neutral-500 dark:text-neutral-400">Klienci</li>
            </ol>
        </nav>
    </x-slot>
    
    <x-slot name="header">
        <h2 class="font-semibold text-3xl text-gray-800 leading-tight m-4">
            {{ __('Klient') }}
        </h2>
    </x-slot>

    <div class="w-full">

        <div class="flex flex-col pr-4 md:mr-4 pb-[120px]">
            <div class="md:flex md:flex-row md:justify-between my-4">
                <div>
                    
                </div>
                <div>
                    <x-link-back :message="__('Back')" :href="route('clients.index')"/>
                </div>
            </div>


            <div class="grid md:grid-cols-2 gap-4 rounded-lg bg-white p-6 mt-6 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
                <div class="">
                    <!--name -->
                    <div class="mb-4">
                        <p class="uppercase text-xs text-zinc-400">{{__('Imię i nazwisko')}}</p>
                        <p class="text-xl">{{$client['name']}}</p>
                    </div> 
                    
                    <!--email -->
                    <div class="mb-4">
                        <p class="uppercase text-xs text-zinc-400">{{__('Adres e-mail')}}</p>
                        <a href="mailto:{{$client['email']}}" title="" class="text-xl text-blue-600 underline">{{$client['email']}}</a>
                    </div> 
                    <!--phone -->
                    <div class="mb-4">
                        <p class="uppercase text-xs text-zinc-400">{{__('Telefon')}}</p>
                        <a href="tel:{{ $client['phone'] }}" title="" class="text-xl text-blue-600 underline">{{ $client['phone'] }}</a>
                    </div>
                    <!--social -->
                    <div class="mb-4">
                        <p class="uppercase text-xs text-zinc-400">{{__('Social media')}}</p>
                        <a href="{{$client['social']}}" target="_blank" title="" class="text-xl text-blue-600 underline">{{$client['social']}}</a>
                    </div>
                    <!--organization -->
                    <div class="mb-4">
                        <p class="uppercase text-xs text-zinc-400">{{__('Firma')}}</p>
                        <p class="text-xl">{{$client['firm']}}</p>
                    </div>
                    

                </div>
                <div class="">
                    <!--desc -->
                    <div class="mb-4">
                        <p class="uppercase text-xs text-zinc-400">{{__('Notatki')}}</p>
                        {{$client['note']}}
                    </div>

                </div>
            </div>            
        </div>       
        
    </div>
</x-app-layout>
