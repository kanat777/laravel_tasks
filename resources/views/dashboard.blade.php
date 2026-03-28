<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Dashboard
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <p class="mb-4">You're logged in!</p>

                <div class="flex gap-4">
                    <a href="{{ route('articles.index') }}" class="text-blue-600 underline">
                        Go to Articles
                    </a>

                    @if(auth()->user()->role === 'user')
                        <a href="{{ route('articles.create') }}" class="bg-green-500 text-black px-4 py-2 rounded">
                            Create Article
                        </a>
                    @endif

                    <a href="{{ route('profile.edit') }}" class="text-blue-600 underline">
                        Edit Profile
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
