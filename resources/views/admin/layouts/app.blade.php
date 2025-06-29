<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-pink-50 min-h-screen">
    <!-- Navbar -->
    <nav class="bg-white shadow-md px-6 py-4 flex items-center justify-between">
        <div class="text-2xl font-bold text-pink-600">Admin Panel</div>

        <div class="flex space-x-6">
            <a href="{{ route('admin.dashboard') }}" class="text-gray-600 hover:text-pink-500 font-medium transition">Dashboard</a>
            <a href="{{ route('admin.categories.index') }}" class="text-gray-600 hover:text-pink-500 font-medium transition">Categories</a>
            <a href="{{ route('admin.products.index') }}" class="text-gray-600 hover:text-pink-500 font-medium transition">Products</a>
            <a href="#" class="text-gray-600 hover:text-pink-500 font-medium transition">Users</a>
        </div>

        <form method="POST" action="{{ route('admin.logout') }}">
            @csrf
            <button type="submit"
                class="bg-pink-500 hover:bg-pink-600 text-white font-semibold px-4 py-1.5 rounded-xl transition">
                Logout
            </button>
        </form>
    </nav>

    @if ($errors->any())
    <div class="m-4 p-4 bg-pink-50 border border-pink-200 text-pink-700 rounded-xl shadow-sm text-sm">
        <ul class="list-disc list-inside space-y-1">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <!-- Main Content -->
    <main class="p-6">
        @yield('content')
    </main>
</body>

</html>