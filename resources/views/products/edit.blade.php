<x-app-layout>
    <x-slot name="js">
    
    </x-slot>

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
                    <x-link-breadcrumb :message="__('Produkty')" :href="route('products.index')" />
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
            {{ __('Produkty. Edytowanie produktu') }}
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
                    <x-link-back :message="__('Back')" :href="route('products.index')"/>
                </div>
            </div>


            <div class="block max-w-md rounded-lg bg-white p-6 mt-6 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] 
            dark:bg-neutral-700">
                <form action="{{ route('products.update') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{ $product->id }}" />
                    <input type="hidden" name="_method" value="PATCH">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <!--SKU -->
                    <div class="mb-4">
                        <x-input-label for="sku" :value="__('SKU*')" />
                        <x-text-input id="sku" class="block mt-1 w-full " type="text" 
                        name="sku" :value="$product->sku" 
                        required autocomplete="sku" />
                        <x-input-error :messages="$errors->get('sku')" class="mt-2" />
                    </div>
                    <!--name -->
                    <div class="mb-4">
                        <x-input-label for="name" :value="__('Nazwa usługi/produktu*')" />
                        <x-text-input id="name" class="block mt-1 w-full " type="text" 
                        name="name" :value="$product->name"
                        required autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>
                    <!--category -->
                    <div class="relative mb-6">
                        <x-input-label class="block mb-2 w-full" for="state_id" :value="__('Kategoria*')" />
                        
                        <select
                        class="block mt-1 w-full border-gray-300 rounded-md"
                        id="category_id" name="category_id">   
                            <option value="0">Wybierz kategorię</option> 
                            @foreach ($productcategory as $item)
                                <option value="{{$item['id']}}" {{ $product->category_id == $item['id'] ? 'selected' : '' }} >{{$item['category']}}</option> 
                            @endforeach
                        </select>
                        <x-input-error :messages="$errors->get('category_id')" class="mt-2" />
                        
                    </div>

                    <!--desc -->
                    <div class="mb-4">
                        <x-input-label for="desc" :value="__('Opis')" />
                        <textarea id="desc" class="block mt-1 rounded-md w-full border-gray-300" rows="13"
                        name="desc">{{$product->desc}}</textarea>
                        <x-input-error :messages="$errors->get('desc')" class="mt-2" />
                    </div>
                    <!--price -->
                    <div class="mb-4">
                        <x-input-label for="price" :value="__('Cena sprzedaży')" />
                        <x-text-input id="price" class="block mt-1 w-full mt-1" type="text" 
                        name="price" :value="$product->price" 
                        required autocomplete="price" />
                        <x-input-error :messages="$errors->get('price')" class="mt-2" />
                    </div>              
                    <!--Submit button-->
                    <button type="submit" class="relative w-full text-center p-3 bg-blue-600 text-white font-black rounded-xl">
                        {{ __('Edytuj produkt')}}
                        </button> 
                </form>
                </div>
            
        </div>       
        
    </div>
</x-app-layout>
