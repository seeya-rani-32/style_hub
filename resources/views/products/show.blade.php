@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto px-4 py-10 grid grid-cols-1 md:grid-cols-2 gap-10">
    <div>
        <img src="{{ asset('storage/' . $product->image) }}"
            alt="{{ $product->name }}"
            class="w-full rounded-xl shadow-md object-cover" />
    </div>
    <div class="m-4">
        <h1 class="text-3xl font-bold text-gray-800 mb-4">{{ $product->name }}</h1>
        <p class="text-pink-500 text-2xl font-semibold mb-4">₹{{ $product->price }}</p>
        <p class="text-gray-600 mb-6">{{ $product->description }}</p>

        <div class="mb-4">
            <span class="inline-block bg-pink-100 text-pink-700 text-sm px-3 py-1 rounded-full">
                Category: {{ $product->category->name ?? 'N/A' }}
            </span>
        </div>

        <a href="{{ route('cart.add', $product->id) }}" class="bg-pink-500 text-white px-6 py-3 rounded-full hover:bg-pink-600 transition shadow-lg">Add to Cart</a>
    </div>
</div>
@endsection