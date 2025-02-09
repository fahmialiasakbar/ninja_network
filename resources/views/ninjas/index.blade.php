<x-layout>
    <h2>Currently Available Ninjas</h2>

    <ul>
        @foreach ($ninjas as $ninja)
            <li>
                <x-card href=" {{ route('ninjas.show', $ninja->id)}}" :highlight="$ninja['skill'] > 85">
                    <h3>{{ $ninja->name }}</h3>
                </x-card>
            </li>
        @endforeach
    </ul>

    {{ $ninjas->links() }}
</x-layout>