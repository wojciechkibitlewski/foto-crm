
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
                    <x-link-breadcrumb :message="__('Zamówienia')" :href="route('leads.index')" />
                </li>
                <li>
                    <x-slash-breadcrumb />
                </li>
                <li class="text-neutral-500 dark:text-neutral-400">Dodawanie zamówienia</li>
            </ol>
        </nav>
    </x-slot>
    
    <x-slot name="header">
        <h2 class="font-semibold text-3xl text-gray-800 leading-tight m-4">
            {{ __('Zamówienia. Nowe zamówienie') }}
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
                    <x-link-back :message="__('Back')" :href="route('leads.index')"/>
                </div>
            </div>


            <div class="block max-w-xl rounded-lg bg-white p-3 md:p-6 mt-6 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] 
            dark:bg-neutral-700">
                <form action="{{ route('leads.store') }}" method="POST">
                    @csrf
                    <!--Tabs navigation-->
                    <ul class="mb-5 flex list-none flex-row flex-wrap border-b-0 pl-0"
                    role="tablist" data-te-nav-ref>
                        <li role="presentation">
                            <a href="#tabs-lead"
                            class="my-2 block border-x-0 border-b-2 border-t-0 border-transparent px-2 md:px-7 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate focus:border-transparent data-[te-nav-active]:border-primary data-[te-nav-active]:text-primary dark:text-neutral-400 dark:hover:bg-transparent dark:data-[te-nav-active]:border-primary-400 dark:data-[te-nav-active]:text-primary-400"
                            data-te-toggle="pill" data-te-target="#tabs-lead" data-te-nav-active
                            role="tab" aria-controls="tabs-lead" aria-selected="true">
                            Zamówienie
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#tabs-client"
                            class="my-2 block border-x-0 border-b-2 border-t-0 border-transparent px-2 md:px-7 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate focus:border-transparent data-[te-nav-active]:border-primary data-[te-nav-active]:text-primary dark:text-neutral-400 dark:hover:bg-transparent dark:data-[te-nav-active]:border-primary-400 dark:data-[te-nav-active]:text-primary-400"
                            data-te-toggle="pill" data-te-target="#tabs-client"
                            role="tab" aria-controls="tabs-client" aria-selected="false" >
                            Klient
                            </a >
                        </li>
                        <li role="presentation">
                            <a href="#tabs-product"
                            class="my-2 block border-x-0 border-b-2 border-t-0 border-transparent px-2 md:px-7 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate focus:border-transparent data-[te-nav-active]:border-primary data-[te-nav-active]:text-primary dark:text-neutral-400 dark:hover:bg-transparent dark:data-[te-nav-active]:border-primary-400 dark:data-[te-nav-active]:text-primary-400"
                            data-te-toggle="pill" data-te-target="#tabs-product"
                            role="tab" aria-controls="tabs-product" aria-selected="false" >
                            Produkty/Usługi
                            </a >
                        </li>
                    </ul>
                    <!--Tabs content-->
                    <div class="mb-6">
                        <div
                            class="hidden opacity-100 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
                            id="tabs-lead"
                            role="tabpanel"
                            aria-labelledby="tabs-lead-tab"
                            data-te-tab-active>
                                <!--SKU -->
                                <div class="mb-4">
                                    <x-input-label for="title" :value="__('Tytuł*')" />
                                    <x-text-input id="title" class="block mt-1 w-full " type="text" 
                                    name="title" :value="old('title')" 
                                    required autofocus autocomplete="title" />
                                    <x-input-error :messages="$errors->get('title')" class="mt-2" />
                                </div>
                                <!--note -->
                                <div class="mb-4">
                                    <x-input-label for="note" :value="__('Notatka')" />
                                    <textarea id="note" class="block mt-1 rounded-md w-full border-gray-300" rows="13"
                                    name="note"> </textarea>
                                    <x-input-error :messages="$errors->get('note')" class="mt-2" />
                                </div>
                                 
                                
                                <!--source -->
                                <div class="relative mb-6">
                                    <x-input-label class="block mb-2 w-full" for="source_id" :value="__('Źródło*')" />
                                    <select
                                    class="block mt-1 w-full"
                                    id="source_id" name="source_id" value="old('source_id')"
                                    data-te-select-init
                                    data-te-select-placeholder="Wybierz źródło"
                                    >   
                                        @foreach ($sources as $item)
                                        <option value="{{$item['id']}}">{{$item['source']}}</option> 
                                        @endforeach
                                    </select>
                                    <x-input-error :messages="$errors->get('source_id')" class="mt-2" />
                                </div>
                                <!--type -->
                                <div class="relative mb-6">
                                    <x-input-label class="block mb-2 w-full" for="type_id" :value="__('Stan zamówienia*')" />
                                    <select
                                    class="block mt-1 w-full border-gray-300 rounded-md"
                                    id="type_id" name="type_id" value="old('type_id')">   
                                        <option value="0">Wybierz stan zamówienia</option>
                                        @foreach ($types as $item)$item['id'] == 1 ? 'selected' : ''
                                        <option value="{{$item['id']}}" {{ $item['id'] == 1 ? 'selected' : '' }} >{{$item['type']}}</option> 
                                        
                                        @endforeach
                                    </select>
                                    <x-input-error :messages="$errors->get('type_id')" class="mt-2" />
                                </div>
                                <!--executionDate -->
                                <div class="flex flex-row mb-4">
                                    
                                    <div class="w-[50%] mr-4">
                                        <x-input-label for="executionDate" :value="__('Data sesji*')" />
                                        <x-text-input id="executionDate" class="block mt-1 w-full " type="date" 
                                        name="executionDate" :value="old('executionDate')" 
                                        autocomplete="executionDate" />
                                        <x-input-error :messages="$errors->get('executionDate')" class="mt-2" />
                                    </div>
                                    <div class="relative w-[50%]" id="time" data-te-timepicker-init >
                                        <x-input-label for="executionTime" :value="__('Godzina')" />
                                        <x-text-input id="executionTime" 
                                        class="peer block mt-1 w-full rounded bg-transparent 
                                        pt-2
                                        outline-none transition-all duration-200 ease-linear 
                                        focus:placeholder:opacity-100 peer-focus:text-primary 
                                        data-[te-input-state-active]:placeholder:opacity-100 
                                        motion-reduce:transition-none 
                                        dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                        type="text" 
                                        name="executionTime" :value="old('executionTime')" 
                                        autocomplete="executionTime" />
                                        <x-input-error :messages="$errors->get('executionTime')" class="mt-2" />
                                    </div>
                                </div>
                        </div>
                        <div
                            class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
                            id="tabs-client"
                            role="tabpanel"
                            aria-labelledby="tabs-client-tab">

                                <livewire:search-client />
                        </div>
                        <div
                            class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
                            id="tabs-product"
                            role="tabpanel"
                            aria-labelledby="tabs-product-tab">
                                <livewire:search-product :products="$products" />

                        </div>
                    </div>

                    

                    <!--Submit button-->
                    <button type="submit" class="relative w-full text-center p-3 bg-blue-600 text-white font-black rounded-xl">
                        {{ __('Dodaj zamówienie ')}}
                        </button> 
                </form>
            </div>            
        </div>       
        
    </div>
</x-app-layout>
