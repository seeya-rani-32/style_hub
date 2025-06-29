@extends('admin.layouts.app')

@section('content')
<div class="bg-white p-6 rounded-xl shadow">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-pink-600">All Categories</h1>
        <a href="{{ route('admin.categories.create') }}"
            class="bg-pink-500 text-white px-4 py-2 rounded-xl hover:bg-pink-600">
            + Add Category</a>
    </div>

    <table class="w-full table-auto">
        <thead>
            <tr class="bg-pink-100">
                <th class="p-3 text-left">Sr. No.</th>
                <th class="p-3 text-left">Name</th>
                <th class="p-3 text-left">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($categories as $category)
            <tr class="border-t hover:bg-pink-50">
                <td class="p-3">{{ $loop->iteration }}</td>

                <td class="p-3">
                    <a href="{{ route('admin.categories.show', $category) }}"
                        class="text-pink-600 hover:underline">
                        {{ $category->name }}
                    </a>
                </td>

                <td class="p-3 space-x-3">
                    <a href="{{ route('admin.categories.edit', $category) }}" class="text-blue-600 hover:underline">Edit</a>
                    <form method="POST" action="{{ route('admin.categories.destroy', $category) }}" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-600 hover:underline"
                            onclick="return confirm('Delete this category?')">Delete</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="2" class="p-3 text-center text-gray-500">No categories found.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection