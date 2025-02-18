<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    // Display a listing of the tasks
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }

    // Show the form for creating a new task
    public function create()
    {
        return view('tasks.create');
    }

    // Store a newly created task in the database
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'nullable|max:1000',
        ]);

        Task::create($request->all());

        return redirect()->route('tasks.index');
    }

    // Display the specified task
    public function show(Task $task)
    {
        return view('tasks.show', compact('task'));
    }

    // Show the form for editing the specified task
    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task'));
    }

    // Update the specified task in the database
    public function update(Request $request, Task $task)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'nullable|max:1000',
        ]);

        $task->update($request->all());

        return redirect()->route('tasks.index');
    }

    // Remove the specified task from the database
    public function destroy(Task $task)
    {
        $task->delete();

        return redirect()->route('tasks.index');
    }
}
