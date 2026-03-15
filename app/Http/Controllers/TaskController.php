<?php

namespace App\Http\Controllers;

use App\Services\TaskService;
use App\Repositories\Contracts\TaskRepositoryInterface;
use App\Http\Requests\StoreTaskRequest;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    protected $service;
    protected $repo;

    public function __construct(TaskService $service, TaskRepositoryInterface $repo)
    {
        $this->service = $service;
        $this->repo = $repo;
    }

    public function index(Request $request)
    {
        $tasks = $this->repo->all();

        if ($request->is('api/*')) {
            return response()->json($tasks);
        }

        return view('tasks.index', compact('tasks'));
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(StoreTaskRequest $request)
    {
        $this->service->store($request->validated());

        if ($request->is('api/*')) {
            return response()->json([
                'message' => 'Task created successfully'
            ]);
        }

        return redirect()
            ->route('tasks.index')
            ->with('success', 'Task created successfully');
    }

    public function show($id, Request $request)
    {
        $task = $this->repo->find($id);

        if ($request->is('api/*')) {
            return response()->json($task);
        }

        return view('tasks.show', compact('task'));
    }

    public function edit($id)
    {
        $task = $this->repo->find($id);

        return view('tasks.edit', compact('task'));
    }

    public function updateStatus($id, Request $request)
    {
        $this->repo->update($id, [
            'status' => $request->status
        ]);

        return response()->json([
            'message' => 'Status updated successfully'
        ]);
    }
    public function update(Request $request, $id)
{
    $data = $request->validate([
        'title' => 'required|string',
        'description' => 'required|string',
        'priority' => 'required',
        'due_date' => 'required|date',
        'assigned_to' => 'required|integer',
      'status' => 'required|in:pending,in_progress,completed'
    ]);

    $this->repo->update($id,$data);

    return redirect()
        ->route('tasks.index')
        ->with('success','Task updated successfully');
}
}