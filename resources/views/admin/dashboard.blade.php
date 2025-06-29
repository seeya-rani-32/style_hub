@extends('admin.layouts.app')

@section('content')
<div class="flex items-center justify-center py-20">
    <div class="bg-white p-8 rounded-2xl shadow-lg w-full max-w-2xl text-center">
        <h2 class="text-3xl font-bold text-pink-600 mb-4">
            Welcome, {{ Auth::guard('admin')->user()->name }} 🌸
        </h2>
        <p class="text-gray-600">This is your dashboard.</p>
    </div>
</div>
@endsection