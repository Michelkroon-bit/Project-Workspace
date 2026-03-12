<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Order Submitted</h2>
    </x-slot>
<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    @include('partials.header')

    <div class="Order_submit">
    <h1>Your order has been placed!</h1>
    <p>Estimated print time: 20 hours</p>
    <p>Thank you for your order!</p>
    
    <p>You'll receive an update when the printing is complete.</p>

        <a href="{{ route('product.view') }}" class="HomeBtn">Continue Shopping</a>
    </div>
        </div>
    </div>
</x-app-layout>
