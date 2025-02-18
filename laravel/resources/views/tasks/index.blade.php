@extends('layouts.app')

@section('content')
    <h1>Tasks</h1>
    <div class="list-group">
        @foreach ($tasks as $task)
            <a href="{{ route('tasks.show', $task->id) }}" class="list-group-item list-group-item-action">
                <h5>{{ $task->title }}</h5>
                <p>{{ $task->description }}</p>
                <p>Status: {{ $task->is_completed ? 'Completed' : 'Pending' }}</p>
            </a>
        @endforeach
    </div>
@endsection
