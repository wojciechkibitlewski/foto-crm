@extends('layouts.auth')
 
    @section('title', 'Join Now')
    @section('description', ' ')

    @section('canonical', ' ')
    @section('ogImage', ' ')

 
@section('content')
    <h1 class="text-3xl font-black mb-4">Join App Now</h1>
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('register') }}">
        @csrf
        <!-- Name -->
        <div>
            <x-text-input 
            id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" 
            required autofocus autocomplete="name" 
            placeholder="Name"
            />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" 
            required autocomplete="username" 
            placeholder="Email"
            />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" 
                            placeholder="Password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" 
                            placeholder="Confirm Password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="mt-4">
            <button type="submit" class="relative w-full text-center p-3 bg-slate-700 text-white font-black rounded-xl">
            Register
            </button>    
        </div>
    </form>

    <p class="text-center mt-4">Have an account? <a href="{{ route('login') }}" class="font-black" title="Sign in">Sign in</a></p>

          
    @endsection
