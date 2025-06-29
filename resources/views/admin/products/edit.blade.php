@extends('admin.layouts.app')

@section('content')
<div class="max-w-3xl mx-auto bg-white p-6 rounded-xl shadow">
    <h1 class="text-2xl font-bold text-pink-600 mb-6">Edit Product</h1>

    <form method="POST" action="{{ route('admin.products.update', $product) }}" enctype="multipart/form-data" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label class="block font-medium text-gray-700">Product Name</label>
            <input type="text" name="name" value="{{ old('name', $product->name) }}"
                class="w-full px-4 py-2 border border-gray-300 rounded-xl" required>
        </div>

        <div>
            <label class="block font-medium text-gray-700">Description</label>
            <textarea name="description" rows="4"
                class="w-full px-4 py-2 border border-gray-300 rounded-xl">{{ old('description', $product->description) }}</textarea>
        </div>

        <div class="grid grid-cols-2 gap-4">
            <div>
                <label class="block font-medium text-gray-700">Price</label>
                <input type="number" name="price" step="0.01" value="{{ old('price', $product->price) }}"
                    class="w-full px-4 py-2 border border-gray-300 rounded-xl" required>
            </div>

            <div>
                <label class="block font-medium text-gray-700">Quantity</label>
                <input type="number" name="quantity" value="{{ old('quantity', $product->quantity) }}"
                    class="w-full px-4 py-2 border border-gray-300 rounded-xl" required>
            </div>
        </div>

        <div>
            <label class="block font-medium text-gray-700 mb-1">Current Image</label>
            @if ($product->image)
            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}"
                class="w-32 h-32 object-cover rounded mb-3">
            @else
            <p class="text-gray-400 italic">No image uploaded</p>
            @endif

            <label class="block font-medium text-gray-700 mt-4">Upload New Image</label>
            <input type="file" name="image" class="w-full px-4 py-2 border border-gray-300 rounded-xl" accept="image/*">
        </div>

        <button type="submit" class="bg-pink-500 text-white font-semibold px-6 py-2 rounded-xl hover:bg-pink-600">
            Update Product
        </button>
    </form>
</div>
@endsection