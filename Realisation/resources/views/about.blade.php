@extends('layout')

@section('title', 'About - Ali Essachi')

@section('content')
<!-- Page Header -->
<section class="bg-gradient-to-br from-indigo-600 to-purple-700 text-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">
            About Me
        </h1>
        <p class="text-xl text-indigo-100 max-w-2xl">
            Learn more about my background, skills, and experience.
        </p>
    </div>
</section>

<!-- Profile Section -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div>
                <img src="{{ $profile['image'] }}"
                     alt="{{ $profile['name'] }}"
                     class="rounded-lg shadow-xl w-full max-w-md mx-auto">
            </div>
            <div>
                <h2 class="text-3xl font-bold text-gray-900 mb-4">
                    {{ $profile['name'] }}
                </h2>
                <p class="text-xl text-indigo-600 font-semibold mb-4">
                    {{ $profile['title'] }}
                </p>
                <p class="text-gray-700 leading-relaxed mb-6 text-lg">
                    {{ $profile['bio'] }}
                </p>
                <div class="space-y-3 text-gray-700">
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-3 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        {{ $profile['location'] }}
                    </div>
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-3 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        <a href="mailto:{{ $profile['email'] }}" class="hover:text-indigo-600">
                            {{ $profile['email'] }}
                        </a>
                    </div>
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-3 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                        <a href="tel:{{ $profile['phone'] }}" class="hover:text-indigo-600">
                            {{ $profile['phone'] }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-gray-900 text-center mb-12">
            By The Numbers
        </h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
            @foreach($stats as $stat)
            <div class="bg-white rounded-lg shadow-md p-6 text-center">
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

<!-- Education Section -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-gray-900 text-center mb-12">
            Education
        </h2>
        <div class="max-w-3xl mx-auto bg-gray-50 rounded-lg shadow-md p-8">
            <div class="flex items-start space-x-4">
                <div class="flex-shrink-0">
                    <svg class="w-12 h-12 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0v6"/>
                    </svg>
                </div>
                <div class="flex-1">
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">
                        {{ $education['program'] }}
                    </h3>
                    <p class="text-lg text-indigo-600 font-semibold mb-2">
                        {{ $education['institution'] }}
                    </p>
                    <p class="text-gray-600 mb-4">
                        📅 {{ $education['period'] }}
                    </p>
                    <p class="text-gray-700 leading-relaxed">
                        {{ $education['description'] }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Key Achievements Section -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-gray-900 text-center mb-12">
            Key Achievements
        </h2>
        <div class="max-w-3xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-6">
            @foreach($achievements as $achievement)
            <div class="bg-white rounded-lg shadow-md p-6 flex items-start space-x-4">
                <svg class="w-6 h-6 text-indigo-600 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                <p class="text-gray-700">{{ $achievement }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Technologies Section -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-gray-900 text-center mb-12">
            Technologies
        </h2>

        <div class="space-y-8">
            @foreach($technologies as $category => $categoryTechs)
            <div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    {{ $category }}
                </h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    @foreach($categoryTechs as $tech)
                    <div>
                        <div class="flex justify-between mb-2">
                            <span class="text-gray-700 font-medium">{{ $tech['name'] }}</span>
                            <span class="text-gray-500">{{ $tech['level'] }}%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-3">
                            <div class="bg-indigo-600 h-3 rounded-full transition-all duration-500"
                                 style="width: {{ $tech['level'] }}%">
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>



<!-- Languages Section -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-gray-900 text-center mb-12">
            Languages
        </h2>
        <div class="max-w-3xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach($languages as $language)
            <div class="bg-white rounded-lg shadow-md p-6 text-center">
                <div class="text-xl font-bold text-gray-900 mb-2">
                    {{ $language['name'] }}
                </div>
                <div class="text-indigo-600 font-semibold">
                    {{ $language['level'] }}
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Interests Section -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-gray-900 text-center mb-12">
            Interests
        </h2>
        <div class="max-w-2xl mx-auto flex flex-wrap justify-center gap-4">
            @foreach($interests as $interest)
            <span class="bg-indigo-100 text-indigo-700 px-6 py-3 rounded-full text-lg font-semibold">
                {{ $interest }}
            </span>
            @endforeach
        </div>
    </div>
</section>

<!-- Contact Section -->
{{-- <section class="py-16 bg-indigo-600">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl font-bold text-white mb-4">
            Let's Connect
        </h2>
        <p class="text-indigo-100 text-lg mb-8 max-w-2xl mx-auto">
            I'm always open to discussing new projects, creative ideas, or opportunities to be part of your vision.
        </p>
        <div class="flex justify-center space-x-6 mb-8">
                    <a href="{{ $profile['github'] }}"
                       target="_blank"
                       class="text-white hover:text-indigo-200 transition">
                        <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                        </svg>
                    </a>
                    <a href="{{ $profile['linkedin'] }}"
                       target="_blank"
                       class="text-white hover:text-indigo-200 transition">
                        <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                        </svg>
                    </a>
        </div>
        <a href="mailto:{{ $profile['email'] }}"
           class="inline-block bg-white text-indigo-600 px-8 py-3 rounded-lg font-semibold hover:bg-indigo-50 transition">
            Send Me an Email
        </a>
    </div>
</section> --}}
@endsection
