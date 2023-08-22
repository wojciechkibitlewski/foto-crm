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
                <li class="text-neutral-500 dark:text-neutral-400">
                    Zamówienia
                </li>
            </ol>
        </nav>
    </x-slot>
    
    <x-slot name="header">
        <h2 class="font-semibold text-3xl text-gray-800 leading-tight m-4">
            {{ __('Zamówienia') }}
        </h2>
    </x-slot>

    <div class="w-full">
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
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
            <!-- search and add button  -->
            <div class="md:flex md:flex-row md:justify-between my-4">
                <div>
                </div>
                <div>
                    <x-link-add :message="__('Dodaj zamówienie')" :href="route('leads.create')"/>
                </div>
            </div>

            <!-- content  -->
            <div class="inline-block min-w-full py-2">
                <div class="" style="overflow-x:auto;">
                    <table class="w-full bg-white rounded-lg shadow-lg my-5">
                        <thead class="text-white">
                            <tr class="bg-teal-400 table-row rounded-none mb-0">
                                <th scope="col" class="text-sm md:text-base p-3 text-left">#</th>
                                <th scope="col" class="text-sm md:text-base p-3 text-left">Data realizacji</th>
                                <th scope="col" class="text-sm md:text-base p-3 text-left">Nazwa</th>
                                <th scope="col" class="text-sm md:text-base p-3 text-left">Zamawiający</th>
                                <th scope="col" class="text-sm md:text-base p-3 text-left">Stan realizacji</th>
                                <th scope="col" class="text-sm md:text-base p-3 text-left w-[300px]">Action</th>
                            </tr>
                        </thead>
                    <tbody class="flex-1 flex-none">
                        @foreach ($leads as $item)
                            <tr class="flex flex-col flex-no wrap table-row mb-0">
                                <td class="text-sm md:text-base border-grey-light border hover:bg-gray-100 p-1 md:p-3 ">{{ ++$i }}</td>
                                <td class="text-sm md:text-base border-grey-light border hover:bg-gray-100 p-1 md:p-3 ">{{ $item->executionDate }}</td>
                                <td class="text-sm md:text-base border-grey-light border hover:bg-gray-100 p-1 md:p-3 ">{{ $item->title }}</td>
                                <td class="text-sm md:text-base border-grey-light border p-1 md:p-3 text-sky-500 underline"><a href="{{route('clients.show',$item->client_id)}}" title="">{{ Helper::getClientName($item->client_id) }}</a></td>
                                <td class="text-sm md:text-base border-grey-light border hover:bg-gray-100 p-1 md:p-3 ">{{ Helper::getStateName($item->type_id) }}</td>
                                <td class="text-sm md:text-base border-grey-light border hover:bg-gray-100 p-1 md:p-3 ">
                                        <form action="{{ route('leads.destroy') }}" method="POST">
                                            <a class="block sm:w-full sm:inline text-sm md:text-base p-1 px-3 bg-sky-200 rounded mr-2 mb-2" href="{{ route('leads.show',$item->id) }}">Show</a>
                                            <a class="block sm:w-full sm:inline text-sm md:text-base p-1 px-3 bg-emerald-200 rounded mr-2 mb-2" href="{{ route('leads.edit',$item->id) }}">Edit</a>
                                        
                                            <input type="hidden" name="id" value="{{ $item->id }}" />
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <button type="submit" class="block sm:inline text-sm md:text-base p-1 px-3 bg-red-200 rounded">Delete</button>
                                        </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    </table>
                    {!! $leads->links() !!}
                </div>
            </div>
        
        </div>
        
    </div>
</x-app-layout>
