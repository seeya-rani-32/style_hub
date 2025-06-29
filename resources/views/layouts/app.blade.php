<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StyleHub</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-pink-50 text-gray-800 font-sans">
    <header class="bg-white shadow sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
            <a href="/" class="text-3xl font-bold text-pink-600">StyleHub</a>
            <nav class="space-x-6 text-sm font-medium">
                <a href="{{ route('about-us')}}" class="text-gray-600 hover:text-pink-500 transition">About</a>
                <a href="{{ route('products.categories')}}" class="text-gray-600 hover:text-pink-500 transition">Products</a>
                <a href="{{ route('contact.show') }}" class="text-gray-600 hover:text-pink-500 transition">Contact</a>
            </nav>
        </div>
    </header>

    <main class="pt-10">
        {{-- Success Alert --}}
        @if (session('success'))
        <div class="max-w-3xl mx-auto mb-6 px-4">
            <div class="bg-green-100 border border-green-300 text-green-700 px-6 py-4 rounded-lg shadow text-center">
                {{ session('success') }}
            </div>
        </div>
        @endif

        {{-- Error Alerts --}}
        @if ($errors->any())
        <div class="max-w-3xl mx-auto mb-6 px-4">
            <div class="bg-red-100 border border-red-300 text-red-700 px-6 py-4 rounded-lg shadow">
                <p class="font-semibold mb-2">Oops! Please fix the following:</p>
                <ul class="list-disc list-inside space-y-1 text-left">
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
        @endif
        @yield('content')
    </main>

    @include('layouts.footer')
</body>

</html>