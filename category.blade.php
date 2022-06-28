<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {!! $category->category_name !!}
        </h2>
    </x-slot>

    @foreach($players as $player)
        <x-player :player="$player"/>
    @endforeach
</x-app-layout>
