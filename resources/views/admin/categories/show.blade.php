@extends('admin.layouts.app')

@section('content')
<div class="bg-white p-6 rounded-xl shadow">
    <h1 class="text-2xl font-bold text-pink-600 mb-4">{{ $category->name }}</h1>

    <p class="text-gray-600 mb-6">
        Category created at: <strong>{{ $category->created_at->format('d M Y') }}</strong>
    </p>
</div>
@endsection