<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Homepage</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-900 text-gray-200 flex flex-col min-h-screen">
    @include('components/navbar')

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

        @foreach ($post as $posts)
        <div class="bg-gray-800 rounded-lg  overflow-hidden shadow-md transition-transform duration-300 transform hover:scale-105 hover:shadow-xl hover:bg-gray-700 mx-4 my-4">                <div class="flex justify-center">
                    <img src="{{ asset('storage/' . $posts->image_path) }}" class="w-full h-auto max-h-48 object-contain" alt="{{ $posts->title }}">
                </div>
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-white mb-2">{{ $posts->title }}</h3>
                    <p class="text-white mb-4">{{ Str::limit($posts->description, 100) }}</p>
                    <a href="{{ route('blogs.show', ['blog' => $posts['id']]) }}"
                        class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition duration-300 font-semibold">
                        Read More
                    </a>
                </div>
            </div>
        @endforeach
    
    </div>

    <footer class="bg-gray-800 text-white text-center p-4 fixed bottom-0 left-0 right-0">
        <p>&copy; 2023 My Website. All Rights Reserved.</p>
    </footer>

</body>

</html>
