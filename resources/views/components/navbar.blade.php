    <!-- Navbar -->
    <nav class="bg-gray-800 shadow-lg">
        <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
            <div class="text-white text-2xl font-bold">
                <a href="{{ url('/') }}">Blogs Website</a>
            <p class="text-lg">Discover a wealth of knowledge through our diverse range of blog posts</p>
            </div>
            <div class="md:flex space-x-4 text-center">
                <a href="{{ url('/') }}" class="text-gray-300 hover:text-white">Home</a>
                <a href="{{ route('blogs.index') }}" class="text-gray-300 hover:text-white">Blogs</a>
            </div>
        </div>
    </nav>