<x-layout>
    Hello World

    <x-card class="max-w-400">
        <div>TEST HOMEHOMEHOME TEST </div>
    </x-card>

    
@forelse($tasks as $task)
    <li>{{$task}}</li>
    @empty
    <p>ไม่มี task</p>
@endforelse
</x-layout>