<style>
    .button {
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;}

  .button1{background-color: lightblue; }
</style>

@extends('layouts.admin')

@section('content')

<x-guest-layout>
    <form method="POST" action="add">
        @csrf

        <!-- supplier name -->
        <div>
            <x-input-label for="supplier_name" :value="__('Supplier Name')" />
            <x-text-input id="supplier_name" class="block mt-1 w-full" type="text" name="supplier_name" :value="old('supplier_name')" required autofocus autocomplete="supplier_name" />
            <x-input-error :messages="$errors->get('supplier_name')" class="mt-2" />
        </div>

        <!-- product type -->
        <div class="mt-4">
            <x-input-label for="product_type" :value="__('Product Type')" />
            <x-text-input id="product_type" class="block mt-1 w-full" type="text" name="product_type" :value="old('product_type')" required autocomplete="product_type" />
            <x-input-error :messages="$errors->get('product_type')" class="mt-2" />
        </div>

        <!-- quantity -->
        <div class="mt-4">
            <x-input-label for="quantity" :value="__('Quantity')" />
            <x-text-input id="quantity" class="block mt-1 w-full" type="text" name="quantity" required autocomplete="quantity" />
            <x-input-error :messages="$errors->get('quantity')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">

            <x-primary-button class="ms-4">
                {{ __('Place Order') }}
            </x-primary-button>

        </div>

    </form>
    <button class="button button1" onclick= "location.href='{{url('admin/print_pdf')}}'">{{ __('Produce Acquisitions Report') }}</button>


</x-guest-layout>

@endsection
