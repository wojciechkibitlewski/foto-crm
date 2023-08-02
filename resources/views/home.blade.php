@extends('layouts.home')
 
    @section('title', 'Welcome')
    @section('description', ' ')

    @section('canonical', ' ')
    @section('ogImage', ' ')

 
@section('content')
    <main id="content">
       <!-- hero  -->
        <div class="w-full h-screen bg-cover bg-center bg-fixed bg-gradient-to-br from-slate-950 to-cyan-700" style="background-image: url({{asset('/storage/hero.jpg')}})">
            <!-- navigation  -->
            @include('components.navigation-guest')
            <section class="h-screen max-w-6xl mx-auto sm:px-6 lg:px-8 mt-6 p-4 mt-[20%] md:mt-[7%] ">
                <div class="max-w-4xl">
                    <h1 class="text-6xl md:text-7xl font-bold text-white">Oh, what a lovely evening!</h1>
                    <p class="text-2xl font-bold text-white mt-6">Design a great app in Laravel using Breeze authoring, Livewire components and the Tailwind framework </p>
                </div>
            </section>
        </div>
        <!-- body content  -->
        <section class="h-screen max-w-6xl mx-auto sm:px-6 lg:px-8 mt-6 p-4 text-center">
            <h2 class="text-3xl my-4 ">Body header</h2>
        </section>
        
    </main>
    <footer>

    </footer>
          
@endsection
