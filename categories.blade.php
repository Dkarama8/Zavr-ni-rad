<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pregled godišta') }}
        </h2>
    </x-slot>

    @foreach($categories as $category)
    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-4 lg:px-8">
            <a href="/categories/{{ $category->slug }}"><div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 hover:text-gray-400">
                    {!! $category->category_name !!}
                </div>
            </div></a>
        </div>
    </div>
    @endforeach
</x-app-layout>
