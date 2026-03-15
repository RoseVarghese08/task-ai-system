<x-app-layout>

<div class="max-w-xl mx-auto p-6">

<h1 class="text-xl font-bold mb-4">Edit Task</h1>

<form method="POST" action="{{ route('tasks.update',$task->id) }}">

@csrf
@method('PUT')

<div class="mb-4">
<label>Title</label>
<input type="text"
name="title"
value="{{ $task->title }}"
class="w-full border p-2 rounded">
</div>

<div class="mb-4">
<label>Description</label>
<textarea name="description"
class="w-full border p-2 rounded">{{ $task->description }}</textarea>
</div>

<div class="mb-4">
<label>Priority</label>

<select name="priority"
class="w-full border p-2">

<option value="low" {{ $task->priority=='low'?'selected':'' }}>Low</option>

<option value="medium" {{ $task->priority=='medium'?'selected':'' }}>Medium</option>

<option value="high" {{ $task->priority=='high'?'selected':'' }}>High</option>

</select>

</div>

<div class="mb-4">
<label>Due Date</label>
<input type="date"
name="due_date"
value="{{ $task->due_date }}"
class="w-full border p-2">
</div>

<div class="mb-4">
<label>Assign User</label>
<input type="number"
name="assigned_to"
value="{{ $task->assigned_to }}"
class="w-full border p-2">
</div>

<button type="submit"
class="bg-blue-500 text-white px-4 py-2 rounded">

Update Task

</button>

</form>

</div>

</x-app-layout>