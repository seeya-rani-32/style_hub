@extends('layouts.app')

@section('content')
<div class="max-w-5xl mx-auto px-4 py-10">
    <h1 class="text-3xl font-bold text-pink-600 mb-6">Browse by Category</h1>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        @foreach ($categories as $category)
        <a href="{{ route('products.byCategory', $category) }}" class="bg-white rounded-lg shadow hover:shadow-xl p-6 text-center hover:bg-pink-50 transition">
            <h2 class="text-xl font-semibold text-gray-800">{{ $category->name }}</h2>
        </a>
        @endforeach
    </div>

    <div class="mt-16">
        <h2 class="text-2xl font-bold text-pink-600 mb-6">Featured Products</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            @foreach ($randomProducts as $product)
            <a href="{{ route('products.show', $product) }}" class="bg-white rounded-lg shadow hover:shadow-xl overflow-hidden transition transform hover:-translate-y-1">
                <img src="{{ asset('storage/' . $product->image) }}"
                    alt="{{ $product->name }}"
                    class="w-full h-[250px] object-cover">
                <div class="p-4 text-left">
                    <h3 class="text-lg font-bold text-gray-800">{{ $product->name }}</h3>
                    <p class="text-pink-500 font-semibold mt-1">₹{{ $product->price }}</p>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</div>
@endsection