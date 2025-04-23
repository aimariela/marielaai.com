@extends('layouts.navigation-welcome')
<x-flux.sidebar />
@section('content')
    <flux:main container>
        <flux:heading size="xl" level="1">Welcome to Mariela AI</flux:heading>

        <flux:text class="mt-2 mb-6 text-base">We are a group of profesional with agreat experience in create websites with AI applications</flux:text>

        <flux:separator variant="subtle" />
        
        <flux:separator variant="subtle" class="mt-6" />
    </flux:main>
    <x-presentation />
@endsection