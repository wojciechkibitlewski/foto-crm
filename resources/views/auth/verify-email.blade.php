@extends('layouts.auth')
 
    @section('title', 'Reset password')
    @section('description', ' ')

    @section('canonical', ' ')
    @section('ogImage', ' ')

 
@section('content')
    <h1 class="text-3xl font-black mb-4">Confirm email</h1>
    <p class="mb-4 text-sm">Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.</p>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ __('A new verification link has been sent to the email address you provided during registration.') }}
        </div>
    @endif

    <form method="POST" action="{{ route('verification.send') }}">
        @csrf
        <div class="mt-4">
            <button type="submit" class="relative w-full text-center p-3 bg-slate-700 text-white font-black rounded-xl">
            Resend Verification Email
            </button>    
        </div>
    </form>

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <div class="mt-4">
            <button type="submit" class="relative w-full text-center p-3 bg-teal-500 text-white font-black rounded-xl">
            Log Out
            </button>    
        </div>
    </form>
          
    @endsection
