@extends('layouts.auth')
 
    @section('title', 'Sign in to app')
    @section('description', ' ')

    @section('canonical', ' ')
    @section('ogImage', ' ')

 
@section('content')
    <h1 class="text-3xl font-black mb-4">{{ __('auth.signin_h1') }}</h1>
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf
        
        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('auth.email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <div class="flex justify-between" >
                <x-input-label for="password" :value="__('auth.password')" />
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('auth.password_forgot') }}
                    </a>
                @endif
            </div>
            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>
        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('auth.remember') }}</span>
            </label>
        </div>

        <div class="mt-4">
            <button type="submit" class="relative w-full text-center p-3 bg-red-700 text-white font-black rounded-xl">
            {{ __('auth.signin')}}
            </button>    
        </div>
    </form>

    <p class="text-center mt-4">{{ __('auth.dont_have_account')}} <a href="{{ route('register') }}" class="font-black" title="Sign in">{{__('auth.joinnow')}}</a></p>

          
    @endsection
