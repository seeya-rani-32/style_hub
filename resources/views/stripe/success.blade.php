@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto text-center py-20">
    <h2 class="text-3xl font-bold text-green-600">✅ Payment Successful!</h2>
    <p class="text-gray-600 mt-4">Thank you for your purchase.</p>
    <a href="{{ route('home') }}" class="mt-6 inline-block bg-blue-500 text-white px-5 py-2 rounded hover:bg-blue-600">
        Go back to Home
    </a>
</div>
@endsection
