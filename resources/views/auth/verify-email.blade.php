@extends('layouts.auth')
 
    @section('title', 'Reset password')
    @section('description', ' ')

    @section('canonical', ' ')
    @section('ogImage', ' ')

 
@section('content')
    <h1 class="text-3xl font-black mb-4">{{__('auth.confirm_h1')}}</h1>
    <p class="mb-4 text-sm">{{__('auth.confirm_p')}}</p>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ __('auth.verification_link_sent') }}
        </div>
    @endif

    <form method="POST" action="{{ route('verification.send') }}">
        @csrf
        <div class="mt-4">
            <button type="submit" class="relative w-full text-center p-3 bg-red-700 text-white font-black rounded-xl">
            {{__('auth.confirm_reset')}}
            </button>    
        </div>
    </form>

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <div class="mt-4">
            <button type="submit" class="relative w-full text-center p-3 bg-teal-500 text-white font-black rounded-xl">
            {{__('auth.logout')}}
            </button>    
        </div>
    </form>
          
    @endsection
