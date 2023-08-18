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
                    Kategorie produktu 
                </li>
            </ol>
        </nav>
    </x-slot>
    
    <x-slot name="header">
        <h2 class="font-semibold text-3xl text-gray-800 leading-tight m-4">
            {{ __('Produkty. Kategorie produktu') }}
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
                    <x-link-add :message="__('Create category')" :href="route('settings.productcategory.create')"/>
                </div>
            </div>

            <!-- content  -->
            <div class="inline-block min-w-full py-2">
                <div class="overflow-hidden">
                    <table class="w-full flex flex-row flex-no-wrap sm:bg-white rounded-lg overflow-hidden sm:shadow-lg my-5">
                        <thead class="text-white">
                            @foreach ($productcategory as $item)
                            <tr class="bg-teal-400 flex flex-col flex-no wrap sm:table-row rounded-l-lg sm:rounded-none mb-2 sm:mb-0">
                                <th scope="col" class="p-3 text-left">#</th>
                                <th scope="col" class="p-3 text-left">Category</th>
                                <th scope="col" class="p-3 text-left">Slug</th>
                                <th scope="col" class="p-3 text-left md:w-[300px]">Action</th>
                            </tr>
                            @endforeach
                        </thead>
                    <tbody class="flex-1 sm:flex-none">
                        @foreach ($productcategory as $item)
                            <tr class="flex flex-col flex-no wrap sm:table-row mb-2 sm:mb-0">
                                <td class="border-grey-light border hover:bg-gray-100 p-3">{{ ++$i }}</td>
                                <td class="border-grey-light border hover:bg-gray-100 p-3">{{ $item->category }}</td>
                                <td class="border-grey-light border hover:bg-gray-100 p-3">{{ $item->slug }}</td>
                                <td class="border-grey-light border hover:bg-gray-100 p-2">
                                    <form action="{{ route('settings.productcategory.destroy',$item->id) }}" method="POST">
                                        <a class="p-1 px-3 bg-sky-200 rounded mr-2" href="{{ route('settings.productcategory.show',$item->id) }}">Show</a>
                                        <a class="p-1 px-3 bg-emerald-200 rounded mr-2" href="{{ route('settings.productcategory.edit',$item->id) }}">Edit</a>
                                        <form action="{{ route('settings.productcategory.destroy') }}" method="POST">
                                            <input type="hidden" name="id" value="{{ $item->id }}" />
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <button type="submit" class="p-1 px-3 bg-red-200 rounded">Delete</button>
                                        </form>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    </table>
                    {!! $productcategory->links() !!}
                </div>
            </div>
        
        </div>
        
    </div>
</x-app-layout>
