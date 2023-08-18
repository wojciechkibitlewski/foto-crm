<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <title>@yield('title')</title>
        <meta name="description" content="@yield('description')" >

        <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
        <link rel="canonical" href="@yield('canonical')">

        <meta property="og:locale" content="pl_PL">
        <meta property="og:type" content="article">
        <meta property="og:title" content="@yield('title')">
        <meta property="og:description" content="@yield('description')">
        <meta property="og:url" content="@yield('canonical')">
        <meta property="og:site_name" content=" ">
        <meta property="article:publisher" content=" ">
        <meta property="article:modified_time" content=" ">
        <meta property="og:image" content="@yield('ogImage')">
        <meta property="og:image:width" content="2200">
        <meta property="og:image:height" content="1485">
        <meta property="og:image:type" content="image/jpeg">

        <link rel="shortlink" href=" ">
        <link rel="icon" href=" " sizes="32x32">
        <link rel="icon" href=" " sizes="192x192">
        <link rel="apple-touch-icon" href=" ">

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        @livewireStyles
</head>
<body class="antialiased ">
    <div id="content">
        <!-- navigation  -->
        @include('home.navigation-user')
        
        <main class="bg-white mt-[70px] md:flex md:flex-row ">
            <div class="hidden md:flex m-0 p-0 basis-1/6 min-w-[250px]">
                @include('home.sidenav')

                <!-- sidenav  -->
            </div>
            <div class="static md:basis-5/6 ">
                @if (isset($breadcrumb))
                    <div class="px-4 pt-6">
                            {{ $breadcrumb }}                       
                    </div>
                @endif
                <!-- header  -->
                @if (isset($header))
                    <header class="-mt-2">
                            {{ $header }}                       
                    </header>
                @endif    
                <section class="h-screen text-left pl-4">
                    <!-- body content  -->
                    {{ $slot }} 
                </section>
            </div>
        </main> 
    </div>
    @include('home.navigation-bottom')
    
    @livewireScripts
</body>
</html>