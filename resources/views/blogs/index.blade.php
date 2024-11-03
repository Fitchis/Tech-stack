<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Blogs Index</title>
</head>
<body class="bg-gray-900 text-gray-200">
    @include('components/navbar')

    <header class="bg-gradient-to-r from-gray-800 to-gray-700 text-white p-6 shadow-md items-center">
        <div>
            <h1 class="text-4xl text-center font-bold">Blogs Index</h1>
        </div>
    </header>
    
    <main class="max-w-5xl mx-auto p-6 bg-gray-800 rounded-lg shadow-lg mt-6">
        <h2 class="text-3xl font-semibold mb-4 text-center">Our Blogs</h2>
        <p class="text-gray-400 leading-relaxed mb-6 text-center">Check out our latest blog posts below!</p>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($blog as $blogs)
                <div class="bg-gray-800 p-6 rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-300">
                    <img src="{{ Storage::url('/' . $blogs->image_path) }}" alt="Image" class="w-full h-48 object-cover rounded-t-lg mb-4">
                    <h3 class="text-xl font-semibold text-white mb-2">{{ $blogs->title }}</h3>
                    <p class="text-gray-400 mb-4">{{ Str::limit($blogs->description, 100) }}</p>
                    <a href="{{ route('blogs.show', ['blog' => $blogs['id']]) }}" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition duration-300">
                        Read More
                    </a>
                </div>
            @endforeach
        </div>

        {{-- <div class="flex justify-center mt-8">
            <a href="{{ route('blogs.create') }}" class="bg-blue-600 text-white px-6 py-3 rounded-lg shadow-lg hover:bg-blue-700 transition duration-300 text-lg font-semibold">
                Create New Blog
            </a>
        </div> --}}
    </main>
    
    <footer class="bg-gray-800 text-white text-center p-4 mt-6">
        <p>&copy; 2023 My Website. All Rights Reserved.</p>
    </footer>
</body>
</html>