@section('content')
<section class="py-20 bg-gray-50 px-4">
    <div class="max-w-3xl mx-auto">
        <div class="bg-white rounded-2xl shadow-lg p-8 md:p-12">
            <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                Get In Touch
            </h1>
            <p class="text-gray-600 mb-8">
                Have a project in mind? Let's talk about it.
            </p>

            <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
                @csrf

                <!-- Name Field -->
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700 mb-2">
                        Your Name
                    </label>
                    <input type="text" id="name" name="name" required
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition">
                </div>

                <!-- Email Field -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                        Email Address
                    </label>
                    <input type="email" id="email" name="email" required
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition">
                </div>

                <!-- Message Field -->
                <div>
                    <label for="message" class="block text-sm font-medium text-gray-700 mb-2">
                        Message
                    </label>
                    <textarea id="message" name="message" rows="5" required
                              class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition resize-none"></textarea>
                </div>

                <!-- Submit Button -->
                <button type="submit"
                        class="w-full px-6 py-4 bg-indigo-600 text-white font-semibold rounded-lg hover:bg-indigo-700 focus:ring-4 focus:ring-indigo-300 transform hover:scale-[1.02] transition-all duration-300">
                    Send Message
                </button>
            </form>
        </div>
    </div>
</section>
<section class="py-16 bg-white px-4">
    <div class="max-w-3xl mx-auto text-center">
        <h2 class="text-2xl font-bold text-gray-900 mb-6">
            Connect With Me
        </h2>
        <div class="flex justify-center gap-6">
            <!-- LinkedIn -->
            <a href="#" class="flex items-center gap-2 px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">
                <svg class="w-5 h-5"><!-- LinkedIn Icon --></svg>
                LinkedIn
            </a>

            <!-- GitHub -->
            <a href="#" class="flex items-center gap-2 px-6 py-3 bg-gray-800 text-white rounded-lg hover:bg-gray-900 transition-colors">
                <svg class="w-5 h-5"><!-- GitHub Icon --></svg>
                GitHub
            </a>
        </div>
    </div>
</section>
@endsection
