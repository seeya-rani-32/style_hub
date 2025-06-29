@extends('admin.layouts.app')

@section('content')
<div class="max-w-3xl mx-auto bg-white p-6 rounded-xl shadow">
    <h1 class="text-2xl font-bold text-pink-600 mb-6">Add New Product</h1>

    <form method="POST" action="{{ route('admin.products.store') }}" enctype="multipart/form-data" class="space-y-4">
        @csrf

        <div>
            <label class="block font-medium text-gray-700">Product Name</label>
            <input type="text" name="name" class="w-full px-4 py-2 border border-gray-300 rounded-xl"
                value="{{ old('name') }}" required>
        </div>

        <div>
            <label class="block font-medium text-gray-700">Description</label>
            <textarea name="description" class="w-full px-4 py-2 border border-gray-300 rounded-xl"
                rows="4">{{ old('description') }}</textarea>
        </div>

        <div class="grid grid-cols-2 gap-4">
            <div>
                <label class="block font-medium text-gray-700">Price</label>
                <input type="number" name="price" step="0.01" class="w-full px-4 py-2 border border-gray-300 rounded-xl"
                    value="{{ old('price') }}" required>
            </div>

            <div>
                <label class="block font-medium text-gray-700">Quantity</label>
                <input type="number" name="quantity" class="w-full px-4 py-2 border border-gray-300 rounded-xl"
                    value="{{ old('quantity', 0) }}" required>
            </div>
        </div>

        <div>
            <label class="block font-medium text-gray-700">Category</label>
            <select name="category_id" class="w-full px-4 py-2 border border-gray-300 rounded-xl" required>
                <option value="">Select Category</option>
                @foreach ($categories as $category)
                <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
                @endforeach
            </select>
        </div>

        <div>
            <label class="block font-medium text-gray-700">Product Image</label>
            <input type="file" name="image" class="w-full px-4 py-2 border border-gray-300 rounded-xl" accept="image/*">
        </div>

        <button type="submit" class="bg-pink-500 text-white font-semibold px-6 py-2 rounded-xl hover:bg-pink-600">
            Create Product
        </button>
    </form>
</div>
@endsection