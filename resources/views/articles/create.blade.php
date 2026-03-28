<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Create Article
            </h2>

            <a href="{{ route('articles.index') }}" class="text-blue-600 underline">
                Back to Articles
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8 bg-white p-6 shadow-sm sm:rounded-lg">
            <form action="{{ route('articles.store') }}" method="POST">
                @csrf

                <div class="mb-4">
                    <label class="block mb-2">Title</label>
                    <input type="text" name="title" value="{{ old('title') }}" class="w-full border rounded p-2">
                    @error('title')
                    <p class="text-red-600 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="block mb-2">Content</label>
                    <textarea name="content" rows="8" class="w-full border rounded p-2">{{ old('content') }}</textarea>
                    @error('content')
                    <p class="text-red-600 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit" class="bg-green-500 text-black px-4 py-2 rounded">
                    Save
                </button>
            </form>
        </div>
    </div>
</x-app-layout>
