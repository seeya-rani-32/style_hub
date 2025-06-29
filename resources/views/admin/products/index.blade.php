@extends('admin.layouts.app')

@section('content')
<div class="bg-white p-6 rounded-xl shadow">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-pink-600">All Products</h1>
        <a href="{{ route('admin.products.create') }}"
            class="bg-pink-500 text-white px-4 py-2 rounded-xl hover:bg-pink-600">+ Add Product</a>
    </div>

    <table class="mt-6 w-full table-auto">
        <thead>
            <tr class="bg-pink-100">
                <th class="p-2 text-left">Sr. No.</th>
                <th class="p-2 text-left">Name</th>
                <th class="p-2 text-left">Category</th>
                <th class="p-2 text-left">Price</th>
                <th class="p-2 text-left">Quantity</th>
                <th class="p-2 text-left">Image</th>
                <th class="p-2 text-left">Actions</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($products as $product)
            <tr class="border-t bg-gray-50">
                <td class="p-3">{{ $loop->iteration }}</td>
                <!-- <td class="p-3">{{ $product->name }}</td> -->
                <td class="p-3">
                    <a href="{{ route('admin.products.show', $product) }}"
                        class="text-pink-600 hover:underline">{{ $product->name }}</a>
                </td>
                <td class="p-3">{{ $product->category->name }}</td>
                <td class="p-3">₹{{ number_format($product->price, 2) }}</td>
                <td class="p-3">{{ $product->quantity }}</td>
                <td>
                    @if ($product->image)
                    <div class="relative group w-12 h-12">
                        <img
                            src="{{ asset('storage/' . $product->image) }}"
                            alt="{{ $product->name }}"
                            class="w-full h-full object-cover rounded-full m-3">
                    </div>
                    @else
                    <p class="text-gray-400 italic">No image uploaded</p>
                    @endif
                </td>

                <td class="p-3">
                    <div class="flex space-x-3">
                        <a href="{{ route('admin.products.edit', $product) }}"
                            class="text-blue-600 hover:underline">Edit</a>

                        <form method="POST"
                            action="{{ route('admin.products.destroy', $product) }}"
                            onsubmit="return confirm('Delete this product?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:underline">
                                Delete
                            </button>
                        </form>
                    </div>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5" class="p-4 text-center text-gray-500">
                    No products found.
                </td>
            </tr>
            @endforelse
        </tbody>

    </table>
</div>

@endsection