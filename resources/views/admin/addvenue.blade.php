@extends('layouts.admin')

@section('content')

<style>
    .container{
background-color: white;
    }
</style>

<x-guest-layout>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<div class='container'>
    <form method="POST" action="num">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="venue_name" :value="__('Venue Name')" />
            <x-text-input id="venue_name" class="block mt-1 w-full" type="text" name="venue_name" :value="old('venue_name')" required autofocus autocomplete="venue_name" />
            <x-input-error :messages="$errors->get('venue_name')" class="mt-2" />
        </div>

        <!-- region -->
        <div class="mt-4">
            <x-input-label for="region" :value="__('Region')" />
            <x-text-input id="region" class="block mt-1 w-full" type="text" name="region" :value="old('region')" required autocomplete="region" />
            <x-input-error :messages="$errors->get('region')" class="mt-2" />
        </div>

        <!-- capacity -->
        <div class="mt-4">
            <x-input-label for="capacity" :value="__('Capacity')" />

            <x-text-input id="capacity" class="block mt-1 w-full"
                            type="text"
                            name="capacity"
                            required autocomplete="capacity" />`

            <x-input-error :messages="$errors->get('capacity')" class="mt-2" />
        </div>

        <!-- Description -->
        <div class="mt-4">
            <x-input-label for="Description" :value="__('Description')" />

            <x-text-input id="Description" class="block mt-1 w-full"
                            type="text"
                            name="Description"
                            required autocomplete="Description" />`

            <x-input-error :messages="$errors->get('Description')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">

            <x-primary-button class="ms-4">
                {{ __('Add Venue') }}
            </x-primary-button>
        </div>

        @if (Session::has('message'))
        <script>
            toastr.success({{"Session::get('message')"}});
        </script>
        @endif

    </form>
</div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</x-guest-layout>

@endsection
