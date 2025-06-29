@extends('admin.layouts.app')

@section('content')
<div class="bg-white p-6 rounded-xl shadow">
    <h1 class="text-2xl font-bold text-pink-600 mb-6">Add New Category</h1>

    <form method="POST" action="{{ route('admin.categories.store') }}" class="space-y-4">
        @csrf

        <div>
            <label class="block font-medium text-gray-700">Category Name</label>
            <input type="text" name="name" class="w-full px-4 py-2 border border-gray-300 rounded-xl"
                value="{{ old('name') }}" required>
        </div>

        <button type="submit"
            class="bg-pink-500 text-white font-semibold px-6 py-2 rounded-xl hover:bg-pink-600">
            Create
        </button>
    </form>
</div>
@endsection