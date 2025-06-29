@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto px-4 py-10">
    <h2 class="text-3xl font-bold text-gray-800 mb-8">🛒 Shopping Cart</h2>

    @if(session('cart'))
    <div class="overflow-x-auto bg-white shadow rounded-lg">
        <table class="min-w-full text-sm text-left">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-6 py-4 font-semibold text-gray-600">Product</th>
                    <th class="px-6 py-4 font-semibold text-gray-600">Quantity</th>
                    <th class="px-6 py-4 font-semibold text-gray-600">Price</th>
                    <th class="px-6 py-4 font-semibold text-gray-600">Total</th>
                    <th class="px-6 py-4 font-semibold text-gray-600">Action</th>
                </tr>
            </thead>
            <tbody class="divide-y">
                @php $total = 0 @endphp
                @foreach(session('cart') as $id => $details)
                @php $total += $details['price'] * $details['quantity'] @endphp
                <tr class="hover:bg-gray-50">
                    <td class="px-6 py-4 flex items-center gap-4">
                        <img src="{{ asset('storage/' . $details['image']) }}" alt="{{ $details['name'] }}" class="w-12 h-12 object-cover rounded">
                        <span class="text-gray-800 font-medium">{{ $details['name'] }}</span>
                    </td>
                    <td class="px-6 py-4">
                        <form action="{{ route('cart.update') }}" method="POST" class="flex items-center gap-2">
                            @csrf
                            @method('PATCH')
                            <input type="hidden" name="id" value="{{ $id }}" />
                            <input type="number" name="quantity" value="{{ $details['quantity'] }}" min="1"
                                class="w-16 border border-gray-300 rounded px-2 py-1 text-center">
                            <button class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600 text-sm">
                                Update
                            </button>
                        </form>
                    </td>
                    <td class="px-6 py-4 text-gray-700">₹{{ $details['price'] }}</td>
                    <td class="px-6 py-4 text-gray-700">₹{{ $details['price'] * $details['quantity'] }}</td>
                    <td class="px-6 py-4">
                        <form action="{{ route('cart.remove') }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="hidden" name="id" value="{{ $id }}" />
                            <button class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600 text-sm">
                                Remove
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="flex justify-between items-center mt-8">
        <h3 class="text-2xl font-semibold text-gray-800">Total: ₹{{ $total }}</h3>
        <a href="{{ route('stripe.checkout') }}"
            class="bg-green-500 text-white px-6 py-2 rounded hover:bg-green-600 text-lg font-semibold">
            Proceed to Checkout
        </a>
    </div>
    @else
    <div class="text-center py-20">
        <h3 class="text-2xl font-bold text-gray-700">Your cart is empty 🛍️</h3>
        <a href="{{ route('home') }}" class="mt-4 inline-block bg-blue-500 text-white px-6 py-2 rounded hover:bg-blue-600">
            Continue Shopping
        </a>
    </div>
    @endif
</div>
@endsection