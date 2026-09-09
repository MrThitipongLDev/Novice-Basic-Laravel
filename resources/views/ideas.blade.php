<x-layout>
    <form method="POST" action="/ideas">
        @csrf
        <textarea name="idea"></textarea>
        <button type="submit">save</button>
    </form>

    @if(count($ideas))
    <ul>
        @foreach($ideas as $idea)
        <li>{{ $idea }}</li>
        @endforeach
    </ul>
    @endif
</x-layout>