@extends('layouts.app')

<h1>{{ $task->title }}</h1>
<p>{{ $task->description }}</p>
<p>Status: {{ $task->is_completed ? 'Completed' : 'Pending' }}</p>
