<div class=" p-4 bg-slate-50">
    <!--value -->
    <div class="mb-4">
        <p class="uppercase text-xs text-zinc-400">{{__('Wartość zamówienia')}}</p>
        <p class="text-xl">{{$ld->leadValue}}</p>
        
    </div>
    <!--products -->
    <div class="mb-4 w-full">
        <p class="uppercase text-xs text-zinc-400">{{__('Produkty')}}</p>
        
        <table class="w-full my-4 border-collapse border border-slate-400">
            <thead>
                <tr>
                    <th class="p-2 border border-slate-300 font-thin">Produkt</th>
                    <th class="p-2 border border-slate-300 font-thin">Ilość</th>
                    <th class="p-2 border border-slate-300 font-thin">#</th>
                </tr>
            </thead>
            <tbody>
                @foreach($leadProduct as $item)
                    <tr>
                        <td class="p-2 border border-slate-300">
                            {{ Helper::getProductName($item->product_id) }}
                        </td>
                        <td class="p-2 border border-slate-300">
                            {{$item->quant}}
                        </td>
                        <td class="p-2 border border-slate-300">
                            <button type="button" class="block sm:w-full sm:inline text-sm p-1 px-3 bg-emerald-200 rounded mr-2 mb-2">
                                Zmień
                        </button>
                        </td>
                    </tr>
                @endforeach
                    <tr>
                        <td class="p-2 border border-slate-300">
                            
                        </td>
                        <td class="p-2 border border-slate-300">
                           
                        </td>
                        <td class="p-2 border border-slate-300">
                            <button type="button" wire:click="addProduct({{ $ld->id }})" class="block sm:w-full sm:inline text-sm p-1 px-3 bg-sky-200 rounded mr-2 mb-2">
                                Dodaj
                        </button>
                        </td>
                    </tr>
                    @if($showform)
                        dodawanie produktu {{$id}}
                    @endif
                    
            </tbody>
        </table>        



        
    </div>
    <!--note -->
    <div class="mb-4">
        <p class="uppercase text-xs text-zinc-400">{{__('Notatki')}}</p>
        <p class="text-xl">{{$ld->note}}</p>
    </div>

</div>




