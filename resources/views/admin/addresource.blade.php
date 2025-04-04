<x-guest-layout>
@extends('layouts.admin')

@section('content')

    <form method="POST" action="sum">
        @csrf

        <!-- Resource Brand -->
        <div>
            <x-input-label for="resource_brand" :value="__('Resource Brand')" />
            <x-text-input id="resource_brand" class="block mt-1 w-full" type="text" name="resource_brand" :value="old('resource_brand')" required autofocus autocomplete="resource_brand" />
            <x-input-error :messages="$errors->get('resource_brand')" class="mt-2" />
        </div>

        <!-- Resource type -->
        <div class="mt-4">
            <x-input-label for="resource_type" :value="__('Resource Type')" />
            <x-text-input id="resource_type" class="block mt-1 w-full" type="text" name="resource_type" :value="old('resource_type')" required autocomplete="resource_type" />
            <x-input-error :messages="$errors->get('resource_type')" class="mt-2" />
        </div>

            <!-- Resource Serial Number -->
        <div class="mt-4">
            <x-input-label for="resource_sn" :value="__('Resource Serial Number')" />
            <x-text-input id="resource_sn" class="block mt-1 w-full" type="text" name="resource_sn" :value="old('resource_sn')" required autocomplete="resource_sn" />
            <x-input-error :messages="$errors->get('resource_sn')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">


            <x-primary-button class="ms-4">
                {{ __('Add Resource') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
@endsection
