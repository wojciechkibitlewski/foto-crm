<div>
    <div class="relative mb-[100px] p-4 bg-gray-50">
        <div class="flex flex-row">
            <div class="w-[60%] mr-4">
                <x-input-label class="block mb-2 w-full" for="type_id" :value="__('Wybierz usługi/produkty  *')" />
                <select class="block mt-1 w-full border-gray-300 rounded-md" wire:model="selectedProductID">
                    <option value="0">Wybierz usługę/produkt</option>
                    @foreach ( $records as $item)
                        <option value="{{ $item['id'] }}">{{ $item['sku'] }}</option>
                    @endforeach
                </select>
            </div>
            <div class="w-[20%] mr-4">
                <x-input-label class="block mb-2 w-full" for="quant" :value="__('ilość*')" />
                <x-text-input id="quant" class="block mt-1 w-full mr-4" type="text" name="quant"
                    wire:model="quant"
                    required autocomplete="quant" />
                <x-input-error :messages="$errors->get('quant')" class="mt-2" />
            </div>
            <div class="w-[20%]">
                <x-input-label class="block mb-2 w-full"  for="buttonAdd" :value="__('Akcja')" />      
                    <button id="buttonAdd" type="button" wire:click="addProductList"
                    class="block sm:inline text-sm md:text-base p-1 py-2 px-3 bg-sky-200  rounded-md">
                        Dodaj
                    </button>
            </div>
        </div>
        
        <x-input-error :messages="$errors->get('product_id')" class="mt-2" />
    </div>
    <div id="nextProdukt">
        @if($selectedProducts)
           @foreach ($selectedProducts as $index => $product)
            <div class=" flex flex-row mb-4" key="{{ $index }}">
                <div  class="w-[60%] mr-4">
                    <x-input-label for="product_name_{{ $index }}" :value="__('Produkt')" />
                    
                    <x-text-input id="product_id_{{ $index }}" type="hidden" name="product_id[]"
                    value="{{ $product['product_id'] }}"/>
                    <x-text-input id="product_quant_{{ $index }}" type="hidden" name="product_quant[]"
                    value="{{ $product['quant'] }}"/>
                    <x-text-input id="product_name_{{ $index }}" type="text" class="block mt-1 w-full " readonly name="product_name[]"
                    value="{{ $product['name'] }}"/>
                </div>
                <div  class="w-[20%] mr-4">
                    <x-input-label for="product_price_{{ $index }}" :value="__('Wartość')" />                
                    <x-text-input id="product_price_{{ $index }}" class="block mt-1 w-full" type="text" readonly name="product_price[]"
                    value="{{ $product['productValue'] }}"/>
                </div>
                <div class="w-[20%]">
                    <x-input-label for="buttonDelete_{{ $index }}" :value="__('Akcja')" />      
                    <button id="buttonDelete_{{ $index }}" type="button" class="block sm:inline text-sm md:text-base mt-1 p-1 py-2 px-3 bg-red-200 rounded-md" 
                    wire:click="removeProduct({{ $index }})">Usuń</button>
                </div>
            </div>
            @endforeach
        @else
        <div class=" flex flex-row  mb-4">
            <div>
                <p>Wybierz usługi/produkty do zamówienia</p>
            </div>
        </div>
        @endif
    </div>
    <!--Value -->
    <div class="mb-4">
        <x-input-label for="leadValue" :value="__('Wartość zamówienia*')" />
        <x-text-input id="leadValue" class="block mt-1 w-[50%] mr-4" type="text" name="leadValue"
            wire:model="leadValue" required autocomplete="leadValue" />
        <x-input-error :messages="$errors->get('leadValue')" class="mt-2" />
    </div>

    

    

    
</div>