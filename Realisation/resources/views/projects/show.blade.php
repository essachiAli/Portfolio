@extends('layout')

@section('title', $project['title'] . ' - Projects')

@section('content')
<!-- Project Header -->
<section class="bg-gradient-to-br from-indigo-600 to-purple-700 text-white py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <a href="{{ route('projects.index') }}"
           class="inline-flex items-center text-indigo-100 hover:text-white mb-6">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
            </svg>
            Back to Projects
        </a>

        <div class="flex items-center space-x-4 mb-4">
            <span class="bg-white bg-opacity-20 px-4 py-2 rounded-full text-sm font-semibold">
                {{ $project['category'] }}
            </span>
            <span class="text-indigo-100">
                {{ date('F Y', strtotime($project['date'])) }}
            </span>
        </div>

        <h1 class="text-4xl md:text-5xl font-bold mb-4">
            {{ $project['title'] }}
        </h1>

        <p class="text-xl text-indigo-100 max-w-3xl">
            {{ $project['description'] }}
        </p>
    </div>
</section>

<!-- Project Details -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
            <!-- Main Content -->
            <div class="lg:col-span-2">
                <!-- Project Image -->
                <img src="{{ $project['image'] }}"
                     alt="{{ $project['title'] }}"
                     class="w-full h-96 object-cover rounded-lg shadow-lg mb-8">

                <!-- Description -->
                <div class="mb-8">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">
                        About This Project
                    </h2>
                    <p class="text-gray-700 leading-relaxed text-lg">
                        {{ $project['long_description'] }}
                    </p>
                </div>

                <!-- Features -->
                <div class="mb-8">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">
                        Key Features
                    </h2>
                    <ul class="space-y-3">
                        @foreach($project['features'] as $feature)
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-indigo-600 mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <span class="text-gray-700">{{ $feature }}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="lg:col-span-1">
                <!-- Technologies -->
                <div class="bg-gray-50 rounded-lg p-6 mb-6">
                    <h3 class="text-lg font-bold text-gray-900 mb-4">
                        Technologies Used
                    </h3>
                    <div class="flex flex-wrap gap-2">
                        @foreach($project['technologies'] as $tech)
                        <span class="bg-white text-gray-700 px-3 py-2 rounded-lg text-sm font-medium shadow-sm">
                            {{ $tech }}
                        </span>
                        @endforeach
                    </div>
                </div>

                <!-- Links -->
                {{-- <div class="bg-gray-50 rounded-lg p-6 mb-6">
                    <h3 class="text-lg font-bold text-gray-900 mb-4">
                        Project Links
                    </h3>
                    <div class="space-y-3">
                        @if($project['github'])
                        <a href="{{ $project['github'] }}"
                           target="_blank"
                           class="flex items-center justify-between bg-white px-4 py-3 rounded-lg hover:shadow-md transition">
                            <span class="flex items-center text-gray-700">
                                <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                                </svg>
                                View Code
                            </span>
                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                            </svg>
                        </a>
                        @endif

                        @if($project['demo'])
                        <a href="{{ $project['demo'] }}"
                           target="_blank"
                           class="flex items-center justify-between bg-white px-4 py-3 rounded-lg hover:shadow-md transition">
                            <span class="flex items-center text-gray-700">
                                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                </svg>
                                Live Demo
                            </span>
                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                            </svg>
                        </a>
                        @endif

                        @if(!$project['github'] && !$project['demo'])
                        <p class="text-gray-500 text-sm italic">
                            Project links not available
                        </p>
                        @endif
                    </div>
                </div> --}}

                <!-- Project Info -->
                <div class="bg-gray-50 rounded-lg p-6">
                    <h3 class="text-lg font-bold text-gray-900 mb-4">
                        Project Info
                    </h3>
                    <div class="space-y-3">
                        <div>
                            <div class="text-sm text-gray-500 mb-1">Category</div>
                            <div class="text-gray-900 font-medium">{{ $project['category'] }}</div>
                        </div>
                        <div>
                            <div class="text-sm text-gray-500 mb-1">Completed</div>
                            <div class="text-gray-900 font-medium">{{ date('F Y', strtotime($project['date'])) }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Navigation -->
<section class="py-12 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <a href="{{ route('projects.index') }}"
               class="inline-block bg-indigo-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-indigo-700 transition">
                View All Projects
            </a>
        </div>
    </div>
</section>
@endsection
