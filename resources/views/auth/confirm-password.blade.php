@extends('layouts.auth')
 
    @section('title', 'Reset password')
    @section('description', ' ')

    @section('canonical', ' ')
    @section('ogImage', ' ')

 
@section('content')
    <h1 class="text-3xl font-black mb-4">Reset password</h1>
    <p class="mb-4 text-sm">This is a secure area of the application. Please confirm your password before continuing.</p>
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf
        
        <!-- Password -->
        <div>
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="mt-4">
            <button type="submit" class="relative w-full text-center p-3 bg-red-700 text-white font-black rounded-xl">
            Confirm
            </button>    
        </div>
    </form>

    <p class="text-center mt-4">Don't have an account? <a href="{{ route('register') }}" class="font-black" title="Sign in">Join now</a></p>

          
    @endsection
