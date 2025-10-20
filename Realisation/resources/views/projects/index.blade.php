@extends('layout')

@section('title', 'Projects - Ali Essachi')

@section('content')
<!-- Page Header -->
<section class="bg-gradient-to-br from-indigo-600 to-purple-700 text-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">
            My Projects
        </h1>
        <p class="text-xl text-indigo-100 max-w-2xl">
            A collection of projects I've worked on, showcasing different technologies and solutions.
        </p>
    </div>
</section>

<!-- Projects Grid -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Category Filter -->
        <div class="mb-8 flex flex-wrap gap-4 justify-center">
            <span class="text-gray-700 font-semibold">Categories:</span>
            @foreach($categories as $category)
            <span class="bg-white px-4 py-2 rounded-lg shadow-sm text-gray-700">
                {{ $category }}
            </span>
            @endforeach
        </div>

        <!-- Projects Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($projects as $project)
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition transform hover:-translate-y-1">
                <img src="{{ $project['image'] }}" 
                     alt="{{ $project['title'] }}" 
                     class="w-full h-48 object-cover">
                
                <div class="p-6">
                    <div class="flex items-center justify-between mb-3">
                        <span class="bg-indigo-100 text-indigo-600 px-3 py-1 rounded-full text-sm font-semibold">
                            {{ $project['category'] }}
                        </span>
                        <span class="text-gray-500 text-sm">
                            {{ date('M Y', strtotime($project['date'])) }}
                        </span>
                    </div>
                    
                    <h3 class="text-xl font-bold text-gray-900 mb-2">
                        {{ $project['title'] }}
                    </h3>
                    
                    <p class="text-gray-600 mb-4 line-clamp-2">
                        {{ $project['description'] }}
                    </p>
                    
                    <div class="flex flex-wrap gap-2 mb-4">
                        @foreach(array_slice($project['technologies'], 0, 3) as $tech)
                        <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded text-xs">
                            {{ $tech }}
                        </span>
                        @endforeach
                        @if(count($project['technologies']) > 3)
                        <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded text-xs">
                            +{{ count($project['technologies']) - 3 }}
                        </span>
                        @endif
                    </div>
                    
                    <div class="flex items-center justify-between">
                        <a href="{{ route('projects.show', $project['slug']) }}" 
                           class="text-indigo-600 hover:text-indigo-700 font-semibold">
                            View Details →
                        </a>
                        
                        <div class="flex space-x-2">
                            @if($project['github'])
                            <a href="{{ $project['github'] }}" 
                               target="_blank"
                               class="text-gray-500 hover:text-gray-700">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                                </svg>
                            </a>
                            @endif
                            
                            @if($project['demo'])
                            <a href="{{ $project['demo'] }}" 
                               target="_blank"
                               class="text-gray-500 hover:text-gray-700">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                                </svg>
                            </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection