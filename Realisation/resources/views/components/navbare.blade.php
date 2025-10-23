<nav class="fixed top-0 w-full bg-white shadow-md z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <!-- Logo -->
            <a href="{{ route('home') }}" class="text-xl font-bold text-indigo-600">
                JD
            </a>

            <!-- Navigation Links -->
            <div class="hidden md:flex space-x-8">
                <a href="{{ route('home') }}"
                   class="text-gray-700 hover:text-indigo-600 font-medium transition-colors
                          {{ request()->routeIs('home') ? 'text-indigo-600' : '' }}">
                    Home
                </a>
                <a href="{{ route('projects') }}"
                   class="text-gray-700 hover:text-indigo-600 font-medium transition-colors
                          {{ request()->routeIs('projects') ? 'text-indigo-600' : '' }}">
                    Projects
                </a>
                <a href="{{ route('contact') }}"
                   class="text-gray-700 hover:text-indigo-600 font-medium transition-colors
                          {{ request()->routeIs('contact') ? 'text-indigo-600' : '' }}">
                    Contact
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <button class="md:hidden p-2">
                <svg class="w-6 h-6 text-gray-700"><!-- Menu Icon --></svg>
            </button>
        </div>
    </div>
</nav>
