@extends('layouts.app')

@section('content')
<section class="bg-pink-50 py-20">
    <div class="max-w-3xl mx-auto text-center px-4">
        <h1 class="text-4xl font-extrabold text-pink-600 mb-4">Let's Get in Touch!</h1>
        <p class="text-lg text-gray-700 mb-10">
            Whether you have a question, feedback, or just want to say hi — we’d love to hear from you 💌
        </p>

        <form action="{{ route('contact.store') }}" method="POST" class="bg-white rounded-xl shadow-md p-8 space-y-6">
            @csrf
            <div class="text-left">
                <label class="block text-sm font-medium text-gray-700 mb-1">Your Name</label>
                <input type="text" name="name" required
                    class="w-full border border-gray-300 px-4 py-2 rounded-lg focus:ring-2 focus:ring-pink-300" />
            </div>

            <div class="text-left">
                <label class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                <input type="email" name="email" required
                    class="w-full border border-gray-300 px-4 py-2 rounded-lg focus:ring-2 focus:ring-pink-300" />
            </div>

            <div class="text-left">
                <label class="block text-sm font-medium text-gray-700 mb-1">Message</label>
                <textarea name="message" rows="5" required
                    class="w-full border border-gray-300 px-4 py-2 rounded-lg focus:ring-2 focus:ring-pink-300"></textarea>
            </div>

            <div>
                <button type="submit"
                    class="bg-pink-500 text-white px-6 py-2 rounded-full hover:bg-pink-600 transition font-semibold shadow-md">
                    Send Message ✉️
                </button>
            </div>
        </form>

        <div class="mt-12 text-gray-500 text-sm">
            Or email us directly at
            <a href="mailto:support@stylehub.com" class="text-pink-500 font-medium hover:underline">
                support@stylehub.com
            </a>
        </div>
    </div>
</section>
@endsection