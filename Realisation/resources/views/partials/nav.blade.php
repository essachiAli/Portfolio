<nav class="bg-white shadow-sm sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex items-center">
                <a href="{{ route('home') }}" class="text-xl font-bold text-indigo-600">
                    AE
                </a>
            </div>
            
            <div class="flex items-center space-x-8">
                <a href="{{ route('home') }}" 
                   class="text-gray-700 hover:text-indigo-600 transition {{ request()->routeIs('home') ? 'text-indigo-600 font-semibold' : '' }}">
                    Home
                </a>
                <a href="{{ route('projects.index') }}" 
                   class="text-gray-700 hover:text-indigo-600 transition {{ request()->routeIs('projects.*') ? 'text-indigo-600 font-semibold' : '' }}">
                    Projects
                </a>
                <a href="{{ route('about') }}" 
                   class="text-gray-700 hover:text-indigo-600 transition {{ request()->routeIs('about') ? 'text-indigo-600 font-semibold' : '' }}">
                    About
                </a>
            </div>
        </div>
    </div>
</nav>