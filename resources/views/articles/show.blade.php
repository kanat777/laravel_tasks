<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                View Article
            </h2>

            <a href="{{ route('articles.index') }}" class="text-blue-600 underline">
                Back to Articles
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8 bg-white p-6 shadow-sm sm:rounded-lg">
            <h1 class="text-2xl font-bold mb-4">{{ $article->title }}</h1>
            <p class="mb-4">{{ $article->content }}</p>
            <p class="text-sm text-gray-500">Author: {{ $article->user->name }}</p>

            <div class="mt-6 flex gap-4">
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
    </div>
</x-app-layout>
