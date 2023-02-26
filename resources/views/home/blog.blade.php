<!-- Post -->
<div class="mt-16">
    <h3 class="mt-16 mb-10 flex justify-center text-center text-4xl text-white font-bold">
        Our Latest Blog
    </h3>

    <div class="grid grid-cols-1 md:grid-cols-2 sm:grid-cols-2 gap-6 lg:gap-8">
    
        @foreach ($posts as $post)
            <!-- post -->
            <div class="scale-100 p-6 bg-white from-gray-700/50 via-transparent rounded-lg shadow-2xl shadow-gray-500/20 flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                <div>
                    <!-- Feature img -->
                    <div class="h-40 w-100 bg-red-50 flex items-center justify-center rounded">
                        <img src="{{ asset($post->featured_image) }}" alt="{{ $post->title }}" class="h-40 w-100 rounded">
                    </div>
                    <!-- Blog Title -->
                    <h2 class="mt-6 text-xl font-semibold text-gray-900">{{ $post->title }}</h2>
                    <!-- Blog Content -->
                    <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                    {{ Str::limit($post -> content, 200)}}
                    </p>
                </div>
            </div><!--/end post -->
        @endforeach
        

    </div>

    <div class="max-w-6xl mx-auto mt-10">
        {{ $posts->links() }}
    </div>
</div><!--/end Post -->  