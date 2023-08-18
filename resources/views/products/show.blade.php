
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
                    <x-link-breadcrumb :message="__('Produkty/Usługi')" :href="route('products.index')" />
                </li>
                <li>
                    <x-slash-breadcrumb />
                </li>
                <li class="text-neutral-500 dark:text-neutral-400">Produkt/usługa</li>
            </ol>
        </nav>
    </x-slot>
    
    <x-slot name="header">
        <h2 class="font-semibold text-3xl text-gray-800 leading-tight m-4">
            {{ __('Produkt/usługa') }}
        </h2>
    </x-slot>

    <div class="w-full">

        <div class="flex flex-col pr-4 md:mr-4 pb-[120px]">
            <div class="md:flex md:flex-row md:justify-between my-4">
                <div>
                    
                </div>
                <div>
                    <x-link-back :message="__('Back')" :href="route('products.index')"/>
                </div>
            </div>


            <div class="grid md:grid-cols-2 gap-4 rounded-lg bg-white p-6 mt-6 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
                <div class="">
                    <!--SKU -->
                    <div class="mb-4">
                        <p class="uppercase text-xs text-zinc-400">{{__('SKU')}}</p>
                        <p class="text-xl">{{$product['sku']}}</p>
                    </div> 
                    
                    <!--name -->
                    <div class="mb-4">
                        <p class="uppercase text-xs text-zinc-400">{{__('Nazwa usługi/produktu')}}</p>
                        <p class="text-xl">{{$product['name']}}</p>
                    </div> 
                    
                    <!--category -->
                    <div class="mb-4">
                        <p class="uppercase text-xs text-zinc-400">{{__('Kategoria')}}</p>
                        <p class="text-xl">{{$product['category_id']}}</p>
                    </div> 
                    <!--price -->
                    <div class="mb-4">
                        <p class="uppercase text-xs text-zinc-400">{{__('Cena sprzedaży')}}</p>
                        <p class="text-xl">{{$product['price']}}</p>
                    </div>
                    

                </div>
                <div class="">
                    <!--desc -->
                    <div class="mb-4">
                        <p class="uppercase text-xs text-zinc-400">{{__('Opis')}}</p>
                        {{html_entity_decode($product['desc'])}}
                    </div>

                </div>
            </div>            
        </div>       
        
    </div>
</x-app-layout>
