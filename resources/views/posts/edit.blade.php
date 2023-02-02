<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Post Edit') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{ route('posts.update', $post) }}" >
                        @csrf
                        @method('put')
                        Title:
                        <br>
                        <input type="text" name="title" value="{{ $post->title }}" class="mt-1 block text-black-800 dark:text-black-200" />
                        <br>
                        Description:
                        <br>
                        <textarea name="description" class="mt-1 block text-black-800 dark:text-black-200">{{ $post->description }}</textarea>
                        <br>
                        Category:
                        <select name="category_id" class="mt-1 block text-black-800 dark:text-black-200">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"
                                        @selected($category->id == $post->category_id)>{{ $category->name }}</option>
                            @endforeach
                        </select>
                        {{-- <input type="text" name="name" value="{{ $category->name }}" class="mt-1 block text-gray-800 dark:text-gray-200" /> --}}
                        <br>
                        <button type="submit" class="button button-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
