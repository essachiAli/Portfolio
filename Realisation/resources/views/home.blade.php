@extends('layout')

@section('title', 'Home - Ali Essachi')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-br from-indigo-600 to-purple-700 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div>
                <h1 class="text-5xl font-bold mb-4">
                    Hi, I'm {{ $profile['name'] }}
                </h1>
                <p class="text-2xl mb-6 text-indigo-100">
                    {{ $profile['title'] }}
                </p>
                <p class="text-lg mb-8 text-indigo-100">
                    {{ $profile['tagline'] }}
                </p>
                <div class="flex space-x-4">
                    <a href="{{ route('projects.index') }}"
                       class="bg-white text-indigo-600 px-6 py-3 rounded-lg font-semibold hover:bg-indigo-50 transition">
                        View My Work
                    </a>
                    <a href="{{ route('about') }}"
                       class="border-2 border-white px-6 py-3 rounded-lg font-semibold hover:bg-white hover:text-indigo-600 transition">
                        About Me
                    </a>
                </div>
            </div>
            <div class="flex justify-center">
                <img src="{{ $profile['image'] }}"
                     alt="{{ $profile['name'] }}"
                     class="rounded-full w-64 h-64 object-cover shadow-2xl">
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
            @foreach($stats as $stat)
            <div class="text-center">
                <div class="text-4xl font-bold text-indigo-600 mb-2">
                    {{ $stat['value'] }}
                </div>
                <div class="text-gray-600">
                    {{ $stat['label'] }}
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Featured Projects Section -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">
                Featured Projects
            </h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Check out some of my recent work. Each project showcases different skills and technologies.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($featuredProjects as $project)
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition">
                <img src="{{ $project['image'] }}"
                     alt="{{ $project['title'] }}"
                     class="w-full h-48 object-cover">
                <div class="p-6">
                    <div class="text-sm text-indigo-600 font-semibold mb-2">
                        {{ $project['category'] }}
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">
                        {{ $project['title'] }}
                    </h3>
                    <p class="text-gray-600 mb-4">
                        {{ $project['description'] }}
                    </p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        @foreach(array_slice($project['technologies'], 0, 3) as $tech)
                        <span class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-sm">
                            {{ $tech }}
                        </span>
                        @endforeach
                    </div>
                    <a href="{{ route('projects.show', $project['slug']) }}"
                       class="text-indigo-600 hover:text-indigo-700 font-semibold">
                        View Details →
                    </a>
                </div>
            </div>
            @endforeach
        </div>

        <div class="text-center mt-12">
            <a href="{{ route('projects.index') }}"
               class="inline-block bg-indigo-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-indigo-700 transition">
                View All Projects
            </a>
        </div>
    </div>
</section>

<!-- Call to Action Section -->
{{-- <section class="py-16 bg-indigo-600">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl font-bold text-white mb-4">
            Let's Work Together
        </h2>
        <p class="text-indigo-100 text-lg mb-8 max-w-2xl mx-auto">
            I'm always interested in hearing about new projects and opportunities.
        </p>
        <a href="mailto:{{ $profile['email'] }}"
           class="inline-block bg-white text-indigo-600 px-8 py-3 rounded-lg font-semibold hover:bg-indigo-50 transition">
            Get In Touch
        </a>
    </div>
</section> --}}
@endsection
