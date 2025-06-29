@extends('admin.layouts.app')

@section('content')
<div class="bg-white p-6 rounded-xl shadow">
    <h1 class="text-2xl font-bold text-pink-600 mb-6">{{ $product->name }}</h1>

    <p class="text-gray-700 mb-2">
        <strong>Category:</strong>
        {{ $product->category->name }}
    </p>

    <p class="text-gray-700 mb-4">
        <strong>Description:</strong> {{ $product->description ?? 'No description' }}
    </p>

    <div class="grid grid-cols-2 gap-4 text-gray-700 mb-6">
        <div><strong>Price:</strong> ₹{{ $product->price }}</div>
        <div><strong>Quantity:</strong> {{ $product->quantity }}</div>
    </div>

    <div class="flex space-x-4">
        <a href="{{ route('admin.products.edit', $product) }}"
            class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Edit</a>

        <form method="POST" action="{{ route('admin.products.destroy', $product) }}">
            @csrf
            @method('DELETE')
            <button type="submit"
                onclick="return confirm('Are you sure you want to delete this product?')"
                class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">
                Delete
            </button>
        </form>
    </div>
</div>
@endsection