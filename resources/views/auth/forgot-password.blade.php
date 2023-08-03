@extends('layouts.auth')
 
    @section('title', 'Forgot password')
    @section('description', ' ')

    @section('canonical', ' ')
    @section('ogImage', ' ')

 
@section('content')
    <h1 class="text-3xl font-black mb-4">Sign in to app</h1>
    <p class="mb-4 text-sm">Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</p>
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf
        
        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="mt-4">
            <button type="submit" class="relative w-full text-center p-3 bg-red-700 text-white font-black rounded-xl">
            Email Password Reset Link
            </button>    
        </div>
    </form>

    <p class="text-center mt-4">Don't have an account? <a href="{{ route('register') }}" class="font-black" title="Sign in">Join now</a></p>

          
    @endsection
