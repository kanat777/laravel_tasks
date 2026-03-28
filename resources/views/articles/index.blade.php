<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Articles
            </h2>

            <div class="flex gap-4">
                <a href="{{ route('dashboard') }}" class="text-blue-600 underline">
                    Dashboard
                </a>

                @if(auth()->user()->role === 'user')
                    <a href="{{ route('articles.create') }}" class="bg-blue-500 text-black px-4 py-2 rounded">
                        Create Article
                    </a>
                @endif
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">

            @if(session('success'))
                <div class="mb-4 text-green-600">
                    {{ session('success') }}
                </div>
            @endif

            @forelse($articles as $article)
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 mt-4">
                    <h2 class="text-2xl font-semibold">{{ $article->title }}</h2>
                    <p class="mt-3">{{ $article->content }}</p>
                    <p class="text-sm text-gray-500 mt-3">Author: {{ $article->user->name }}</p>

                    <div class="mt-4 flex gap-4">
                        <a href="{{ route('articles.show', $article) }}" class="text-blue-600">View</a>

                        @can('update', $article)
                            <a href="{{ route('articles.edit', $article) }}" class="text-yellow-600">Edit</a>
                        @endcan

                        @can('delete', $article)
                            <form action="{{ route('articles.destroy', $article) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600">Delete</button>
                            </form>
                        @endcan
                    </div>
                </div>
            @empty
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                    No articles found.
                </div>
            @endforelse

        </div>
    </div>
</x-app-layout>
