<x-layouts.app :title="__('Dashboard')">


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h2 class="text-xl font-bold mb-6">Create Article</h2>

                    <form method="POST" action="{{ route('articles.store') }}" class="space-y-6">
                        @csrf

                        {{-- Title Field --}}
                        <div>
                            <label for="title" class="block text-sm font-medium text-gray-700">
                                {{ __('Title') }}
                            </label>
                            <input id="title"
                                name="title"
                                type="text"
                                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 p-2"
                                value="{{ old('title') }}"
                                required
                                autofocus>

                            @if($errors->has('title'))
                            <div class="mt-2 text-sm text-red-600">
                                @foreach ($errors->get('title') as $error)
                                <p>{{ $error }}</p>
                                @endforeach
                            </div>
                            @endif
                        </div>

                        {{-- Content Field --}}
                        <div>
                            <label for="content" class="block text-sm font-medium text-gray-700">
                                {{ __('Content') }}
                            </label>
                            <textarea id="content"
                                name="content"
                                rows="6"
                                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 p-2"
                                required>{{ old('content') }}</textarea>

                            @if($errors->has('content'))
                            <div class="mt-2 text-sm text-red-600">
                                @foreach ($errors->get('content') as $error)
                                <p>{{ $error }}</p>
                                @endforeach
                            </div>
                            @endif
                        </div>

                        {{-- Published Checkbox --}}
                        <div class="flex items-center">
                            <input id="is_published"
                                name="is_published"
                                type="checkbox"
                                value="1"
                                @checked(old('is_published'))
                                class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mr-2">
                            <label for="is_published" class="text-sm font-medium text-gray-700">
                                {{ __('Published') }}
                            </label>
                        </div>

                        {{-- Save Button --}}
                        <div class="flex items-center gap-4">
                            <button type="submit"
                                class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-4 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                {{ __('Save') }}
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-layouts.app>