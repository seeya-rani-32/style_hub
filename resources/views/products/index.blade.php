@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto px-4 py-10">
    <h1 class="text-3xl font-bold text-pink-600 mb-6">Products in "{{ $category->name }}"</h1>

    @if ($products->isEmpty())
    <p class="text-gray-500">No products found in this category.</p>
    @else
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
        @foreach ($products as $product)
        <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition transform hover:-translate-y-1">
            <a href="{{ route('products.show', $product) }}" class="block bg-white rounded-xl shadow-md hover:shadow-xl transition transform hover:-translate-y-1">
                <div class="overflow-hidden rounded-t-xl">
                    <img src="{{ asset('storage/' . $product->image) }}"
                        alt="{{ $product->name }}"
                        class="w-full aspect-square object-cover transition-transform duration-300 hover:scale-105" />
                </div>
                <div class="p-4">
                    <h2 class="text-lg font-bold text-gray-800">{{ $product->name }}</h2>
                    <p class="text-pink-500 font-semibold mt-1">₹{{ $product->price }}</p>
                </div>
            </a>
        </div>
        @endforeach
    </div>
    @endif
</div>
@endsection