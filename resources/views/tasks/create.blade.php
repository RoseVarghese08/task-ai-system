<x-app-layout>

<div class="max-w-xl mx-auto p-6">

<h1 class="text-xl font-bold mb-4">Create Task</h1>

@if ($errors->any())
<div class="bg-red-100 text-red-700 p-3 mb-4 rounded">
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif

<form method="POST" action="{{ route('tasks.store') }}">

@csrf

<div class="mb-4">
<label class="block">Title</label>
<input type="text" name="title"
class="w-full border rounded p-2">
</div>

<div class="mb-4">
<label>Description</label>
<textarea name="description"
class="w-full border rounded p-2"></textarea>
</div>


<div class="mb-4">
<label>Priority</label>
<select name="priority"
class="w-full border p-2">
<option value="low">Low</option>
<option value="medium">Medium</option>
<option value="high">High</option>
</select>
</div>

<div class="mb-4">
<label>Due Date</label>
<input type="date" name="due_date"
class="w-full border p-2">
</div>

<div class="mb-4">
<label>Assign User</label>
<input type="number"
name="assigned_to"
class="w-full border p-2">
</div>

<div class="mb-4">
<label>Status</label>
<select name="status" class="w-full border p-2">
<option value="pending">Pending</option>
<option value="in_progress">In Progress</option>
<option value="completed">Completed</option>
</select>
</div>

<button type="submit" class="bg-green-500 text-black px-4 py-2 rounded">
Save Task
</button>


</form>

</div>

</x-app-layout>