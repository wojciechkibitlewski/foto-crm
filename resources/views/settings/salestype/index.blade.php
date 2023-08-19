<x-app-layout>

    <!-- breadcrumb -->
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
                    <x-link-breadcrumb :message="__('Ustawienia')" :href="route('settings')" />
                </li>                
                <li>
                    <x-slash-breadcrumb />
                </li>
                <li class="text-neutral-500 dark:text-neutral-400">
                    Zamówienia
                </li>
            </ol>
        </nav>
    </x-slot>
    
    <x-slot name="header">
        <h2 class="font-semibold text-3xl text-gray-800 leading-tight m-4">
            {{ __('Zamówienia. Stany realizacji zamowienia') }}
        </h2>
    </x-slot>

    <div class="w-full">
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif


        <div class="flex flex-col pr-4 md:mr-4 pb-[120px]">
            <!-- search and add button  -->
            <div class="md:flex md:flex-row md:justify-between my-4">
                <div>
                </div>
                <div>
                    <x-link-add :message="__('Utwórz nowy stan')" :href="route('settings.salestype.create')"/>
                </div>
            </div>

            <!-- content  -->
            <div class="inline-block min-w-full py-2">
                <div class="overflow-hidden">
                    <table class="w-full flex flex-row flex-no-wrap sm:bg-white rounded-lg overflow-hidden sm:shadow-lg my-5">
                        <thead class="text-white">
                            @foreach ($types as $item)
                            <tr class="bg-teal-400 flex flex-col flex-no wrap sm:table-row rounded-l-lg sm:rounded-none mb-2 sm:mb-0">
                                <th scope="col" class="p-3 text-left">ID</th>
                                <th scope="col" class="p-3 text-left">Stan</th>
                                <th scope="col" class="p-3 text-left">Kolejność</th>
                                <th scope="col" class="p-3 text-left md:w-[300px]">Action</th>
                            </tr>
                            @endforeach
                        </thead>
                    <tbody class="flex-1 sm:flex-none">
                        @foreach ($types as $item)
                            <tr class="flex flex-col flex-no wrap sm:table-row mb-2 sm:mb-0">
                                <td class="border-grey-light border hover:bg-gray-100 p-3">{{ $item->id }}</td>
                                <td class="border-grey-light border hover:bg-gray-100 p-3">{{ $item->type }}</td>
                                <td class="border-grey-light border hover:bg-gray-100 p-3">{{ $item->order }}</td>
                                <td class="border-grey-light border hover:bg-gray-100 p-2">
                                    <form action="{{ route('settings.salestype.destroy',$item->id) }}" method="POST">
                                        <a class="p-1 px-3 bg-sky-200 rounded mr-2" href="{{ route('settings.salestype.show',$item->id) }}">Show</a>
                                        <a class="p-1 px-3 bg-emerald-200 rounded mr-2" href="{{ route('settings.salestype.edit',$item->id) }}">Edit</a>
                                            <input type="hidden" name="id" value="{{ $item->id }}" />
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <button type="submit" class="p-1 px-3 bg-red-200 rounded">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    </table>
                    {!! $types->links() !!}
                </div>
            </div>
        
        </div>
        
    </div>
</x-app-layout>
