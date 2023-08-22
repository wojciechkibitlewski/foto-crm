
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
                <li class="text-neutral-500 dark:text-neutral-400">Zamówienie</li>
            </ol>
        </nav>
    </x-slot>
    
    <x-slot name="header">
        <div class="lg:flex lg:flex-row lg:flex-row-reverse lg:justify-between lg:items-center lg:max-lg 2xl:max-w-6xl">
            <div class="lg:basis-1/6 lg:w-full m-4">
                <x-link-back :message="__('Back')" :href="route('leads.index')"/>
            </div>
            <h2 class="lg:basis-5/6 font-semibold text-3xl text-gray-800 leading-tight m-4">
                {{$lead->title}}
            </h2>
            
        </div>
    </x-slot>

    <div class="grid lg:max-lg 2xl:max-w-6xl lg:grid-cols-6 lg:gap-0 mt-8 pb-[150px] m-2">
        <div class="lg:col-span-2 mt-4">
            <p class="uppercase text-xs text-gray-300">{{__('Data sesji')}}</p>
            <div class="flex flex-row justify-between items-center	">
                <p class="text-2xl">{{$lead->executionDate}}, godz: {{$lead->executionTime}}</p>
                <span>
                    <button class="text-sm text-blue-600 px-2"> Update </button> 
                </span>
            </div>
        </div>
        <div class="lg:col-span-2 lg:pl-4 mt-4">
            <p class="uppercase text-xs text-zinc-400">{{__('Stany realizacji zamowienia')}}</p>
            <div class="flex flex-row justify-between items-center	">
                <p class="text-2xl">{{ Helper::getStateName($lead->type_id) }}</p>
                <span>
                    <button class="text-sm text-blue-600 px-2"> Update </button> 
                </span>
            </div>
        </div>
        <div class="">
        </div>
        <div class="">
        </div>
        
        <!-- divide  -->
        <div class="lg:col-span-2 text-sm md:pr-6">
            <hr class=" my-2 border-gray-200" />
            
            <!--client -->
            <div class="mb-4">
                <p class="uppercase text-xs text-zinc-400">{{__('Klient')}}</p>
            </div> 
            <div class="mb-4 flex flex-row justify-between">
                <p class="font-bold">{{$client->name}} </p>
                <span>
                    <a href="#" class="text-blue-600 px-2"> View </a> 
                </span>
            </div> 
            <div class="mb-4">
                <a href="mailto:{{$client->email}}" title="" class="text-blue-600 underline">{{$client->email}}</a><br/>
                <a href="tel:{{ $client->phone }}" title="" class="text-blue-600 underline">{{ $client->phone }}</a><br/>
                <a href="{{$client->social}}" target="_blank" title="" class="text-blue-600 underline">{{$client->social}}</a><br/>
                <p class="font-bold">{{$client->firm}}</p>
            </div> 
            <hr class=" my-2 border-gray-200" />
            <div class="mb-4">
                <p class="uppercase text-xs text-zinc-400">{{__('Żródło')}}</p>
            </div>
            <div class="mb-4">
                <p class="font-bold">{{ Helper::getSourceName($lead->source_id) }}</p>
            </div> 

            
        </div>
        <div class="lg:col-span-4 text-sm">
            <hr class=" my-2 border-gray-200" />
            <div class="bg-gray-50 p-2 ">
                <!-- leadValue  -->
                <div class="flex flex-row">
                    <div class="w-[50%] p-2">
                        <div class="mb-4">
                            <p class="uppercase text-xs text-zinc-400">{{__('Wartość zamówienia')}}</p>
                        </div> 
                        <div class="mb-4">
                        <p class="font-bold">{{$lead->leadValue}} zł</p>
                        </div> 
                    </div>
                    <div class="w-[50%]  p-2 {{$lead->leadValue > $lead->advanceValue ? 'bg-red-100':''}}">
                        <div class="mb-4">
                            <p class="uppercase text-xs text-zinc-400">{{__('Zaliczka')}}</p>
                        </div> 
                        <div class="mb-4 flex flex-row justify-between">
                            <p class="font-bold">{{$lead->advanceValue}} zł </p>
                            <span>
                                <button type="button" 
                                    class="text-blue-600"
                                    data-te-toggle="modal"
                                    data-te-target="#addAdvanceModal"
                                    >
                                    Dodaj wpłatę
                                </button>
                            </span>
                        </div> 



                    </div>
                </div>
                
                <!-- products  -->
                <div class="mb-4 w-full">
                    
                    <table class="w-full my-4">
                        <thead>
                            <tr class="border-b border-gray-200">
                                <th class="p-2 font-thin">Produkt</th>
                                <th class="p-2 font-thin">Ilość</th>
                                <th class="p-2 font-thin">Cena</th>
                                <th class="p-2 font-thin">#</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($leadProduct as $item)
                                <tr class="border-b border-gray-200">
                                    <td class="p-2 ">
                                        {{ Helper::getProductName($item->product_id) }}
                                    </td>
                                    <td class="p-2 ">
                                        {{$item->quant}}
                                    </td>
                                    <td class="p-2 ">
                                        {{$item->product_price}}
                                    </td>
                                    <td class="py-2 lg:p-2 ">
                                        <button class="text-blue-600 border-r border-gray-200 px-2"> Update </button> 
                                        <button class="text-blue-600 px-2"> Remove </button> 
                                        
                                    </td>
                                </tr>
                            @endforeach
                                <tr>
                                    <td class="p-2" row="4">
                                        <button class="text-blue-600 py-2"
                                        data-te-toggle="modal"
                                        data-te-target="#addProductModal"> 
                                            Add new product
                                        </button> 
                                    </td>
                                </tr>
                        </tbody>
                    </table>        
                </div>
                <!-- note  -->
                <hr class=" my-2 border-gray-200" />
                
                <div class="mb-4 flex flex-row justify-between items-center	">
                    <p class="uppercase text-xs text-zinc-400">{{__('Notatki')}}</p>
                    <span>
                        <button class="text-sm text-blue-600 px-2"
                        data-te-toggle="modal"
                        data-te-target="#addNoteModal"
                        > Update </button> 
                    </span>
                </div>
                <div class="mb-4">
                    <p class="">{{$lead->note}}</p>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
@include('leads.modal-note')
@include('leads.modal-advance')
@include('leads.modal-product')



