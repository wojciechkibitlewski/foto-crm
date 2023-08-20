<div>

    <div class="mb-4">
        <x-input-label for="name" :value="__('Imię, nazwisko*')" />
        <x-text-input id="name" class="block mt-1 w-full " type="text" wire:model="search" wire:keyup="searchResult"
        name="client_name" :value="old('name')" 
        required />
        @if($showresult)
        <ul class="w-full bg-white border rounded" >
            @if(!empty($records))
                @foreach($records as $record)
                <li class="p-4 cursor-pointer" wire:click="fetchClientDetail({{ $record->id }})">{{ $record->name}}</li>
                @endforeach
            @endif
        </ul>
        @endif
        <div class="clear"></div>
        <x-input-error :messages="$errors->get('name')" class="mt-2" />
    </div>
    <!--mail -->   
    <div class="mb-4">
        <x-input-label for="email" :value="__('E-mail')" />
        <x-text-input type="hidden" name="client_id" value="{{ !empty($clientDetails) ? $clientDetails->id : '' }}" />
        <x-text-input id="email" class="block mt-1 w-full " type="email" 
        name="client_email" value="{{ !empty($clientDetails) ? $clientDetails->email : '' }}" 
        autocomplete="email" />
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
    </div>

    <!--phone -->
    <div class="mb-4">
        <x-input-label for="phone" :value="__('Telefon')" />
        <x-text-input id="phone" class="block mt-1 w-full " type="text" 
        name="client_phone" value="{{ !empty($clientDetails) ? $clientDetails->phone : '' }}" 
        autocomplete="phone" />
        <x-input-error :messages="$errors->get('phone')" class="mt-2" />
    </div>
    <!--social -->
    <div class="mb-4">
        <x-input-label for="social" :value="__('Link do social media')" />
        <x-text-input id="social" class="block mt-1 w-full " type="text" 
        name="client_social" value="{{ !empty($clientDetails) ? $clientDetails->social : '' }}" 
        autocomplete="social" />
        <x-input-error :messages="$errors->get('social')" class="mt-2" />
    </div>
    <!--firm -->
    <div class="mb-4">
        <x-input-label for="firm" :value="__('Firma')" />
        <x-text-input id="firm" class="block mt-1 w-full " type="text" 
        name="client_firm" value="{{ !empty($clientDetails) ? $clientDetails->firm : '' }}" 
        autocomplete="firm" />
        <x-input-error :messages="$errors->get('firm')" class="mt-2" />
    </div>
    <!--note -->
    <div class="mb-4">
        <x-input-label for="note" :value="__('Notatki')" />
        <textarea id="note" class="block mt-1 rounded-md w-full border-gray-300" rows="13"
        name="client_note">{{ !empty($clientDetails) ? $clientDetails->note : '' }}</textarea>
        <x-input-error :messages="$errors->get('note')" class="mt-2" />
    </div>
    
</div>