@extends('layouts.navigation-welcome')	
@section('content')


    <flux:main container>
        <flux:heading size="xl" level="1">Welcome to Mariela AI</flux:heading>

        <flux:text class="mt-2 mb-6 text-base">We are a group ofprofesional with agreat experience in create websites with AI applications</flux:text>

        <flux:separator variant="subtle" />
    </flux:main>

    @fluxScripts

        @if (Route::has('login'))
            <div class="h-14.5 hidden lg:block"></div>
        @endif
@endsection
