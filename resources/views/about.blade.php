@extends('layouts.app')

@section('content')
<section class="bg-pink-50 py-20">
    <div class="max-w-5xl mx-auto px-4 text-center">
        <h1 class="text-4xl font-extrabold text-pink-600 mb-6">About StyleHub</h1>
        <p class="text-lg text-gray-700 leading-relaxed mb-8">
            Welcome to <strong>StyleHub</strong> — your cozy corner for all things adorable and comfy for babies! We believe every giggle, crawl, and nap should be wrapped in love and softness. Our mission is to bring you charming baby clothes that are as functional as they are fashionable.
        </p>

        <div class="grid md:grid-cols-2 gap-8 text-left">
            <div class="bg-white rounded-xl p-6 shadow hover:shadow-xl transition">
                <h2 class="text-2xl font-semibold text-pink-500 mb-2">Who We Are</h2>
                <p class="text-gray-600">
                    We’re a team of designers, parents, and dreamers. Each piece we create is inspired by the little joys of parenting — from first steps to first birthdays. Our clothing is made with love, using safe, breathable fabrics for ultimate comfort.
                </p>
            </div>
            <div class="bg-white rounded-xl p-6 shadow hover:shadow-xl transition">
                <h2 class="text-2xl font-semibold text-pink-500 mb-2">What We Believe</h2>
                <p class="text-gray-600">
                    Your baby’s comfort comes first. That’s why our designs are easy to wear, gentle on skin, and full of personality. We celebrate every giggle, burp, and bedtime with clothes that make your heart smile.
                </p>
            </div>
        </div>

        <div class="mt-12">
            <a href="{{ route('home') }}" class="inline-block bg-pink-500 text-white px-6 py-3 rounded-full text-lg font-medium hover:bg-pink-600 transition">
                Back to Home
            </a>
        </div>
    </div>
</section>
@endsection