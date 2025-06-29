@extends('layouts.app')

@section('content')
<section class="text-center mb-16 relative">
    <div class="max-w-4xl mx-auto">
        <h1 class="text-5xl font-extrabold text-pink-600 leading-tight animate-bounce transition-all duration-700" id="headline">
            Adorable Baby Clothes for Every Moment
        </h1>
        <p class="mt-4 text-lg text-gray-600">Soft, safe, and stylish fashion your baby deserves. Shop our handpicked collection now.</p>
        <a href="#shop" class="mt-6 inline-block bg-pink-500 text-white text-lg px-6 py-3 rounded-full hover:bg-pink-600 transition shadow-lg hover:shadow-xl transform hover:scale-105">Shop Now</a>
    </div>
</section>

<section id="about" class="py-20 bg-white">
    <div class="max-w-4xl mx-auto text-center px-4">
        <h2 class="text-3xl font-bold text-pink-600 mb-4">About StyleHub</h2>
        <p class="text-gray-600 text-lg">We’re a small team of parents and designers who believe baby clothes should be as joyful and unique as your little one. StyleHub offers thoughtfully crafted pieces using soft, breathable fabrics your baby will love.</p>
    </div>
</section>

<section class="py-24 bg-yellow-50">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <h2 class="text-4xl font-extrabold text-yellow-600 mb-8">Cuteness Overload Essentials 💛</h2>
        <p class="text-gray-600 text-xl mb-12 max-w-3xl mx-auto">
            From tiny toes to button noses, wrap your little one in joy with our irresistibly soft, stylish, and snuggle-ready baby must-haves. Every moment is a photo-op with StyleHub!
        </p>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-10">
            <div class="bg-white rounded-3xl shadow-xl p-6 text-left hover:shadow-2xl transition duration-300 transform hover:-translate-y-1">
                <img src="{{ asset('storage/clothes/baby-1.jpg')}}" alt="Smiling Baby in Bib" class="w-full h-80 object-cover rounded-2xl mb-5">
                <h3 class="text-2xl font-bold text-yellow-600 mb-2">Giggly Moments Bib</h3>
                <p class="text-gray-500 text-lg">Soft & stylish bibs made for all the giggles, dribbles, and cute messes.</p>
            </div>

            <div class="bg-white rounded-3xl shadow-xl p-6 text-left hover:shadow-2xl transition duration-300 transform hover:-translate-y-1">
                <img src="{{ asset('storage/clothes/baby-2.jpg')}}" alt="Cute Baby in Onesie" class="w-full h-80 object-cover rounded-2xl mb-5">
                <h3 class="text-2xl font-bold text-yellow-600 mb-2">Hug-Ready Onesie</h3>
                <p class="text-gray-500 text-lg">Cozy and cute — this onesie is made for cuddles, naps, and little adventures.</p>
            </div>

            <div class="bg-white rounded-3xl shadow-xl p-6 text-left hover:shadow-2xl transition duration-300 transform hover:-translate-y-1">
                <img src="{{ asset('storage/clothes/baby-3.jpg')}}" alt="Baby with Burp Cloth" class="w-full h-80 object-cover rounded-2xl mb-5">
                <h3 class="text-2xl font-bold text-yellow-600 mb-2">Cuddle-Clean Burp Cloth</h3>
                <p class="text-gray-500 text-lg">Gentle on baby skin, tough on spills — and cute enough for any outfit!</p>
            </div>
        </div>
    </div>
</section>


<section id="contact" class="py-20 bg-pink-50">
    <div class="max-w-3xl mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold text-pink-600 mb-4">Contact Us</h2>
        <p class="text-gray-600 text-lg mb-8">Have questions or feedback? We'd love to hear from you.</p>
        <a href="mailto:support@stylehub.com" class="text-pink-500 font-semibold hover:underline text-lg hover:text-pink-700 transition duration-200">support@stylehub.com</a>
    </div>
</section>
@endsection


<script>
    document.addEventListener('DOMContentLoaded', function() {
        const headline = document.getElementById('headline');
        const messages = [
            'Adorable Baby Clothes for Every Moment',
            'Celebrate Every Cuddle in StyleHub Comfort!'
        ];
        let index = 0;

        setInterval(() => {
            index = (index + 1) % messages.length;
            headline.innerText = messages[index];
        }, 5000);
    });
</script>