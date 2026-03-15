<x-app-layout>
<div class="min-h-screen bg-gradient-to-r from-slate-800 to-slate-900 text-black p-8">

<div class="flex justify-between items-center mb-6">
<h1 class="text-3xl font-bold">Task List</h1>

<a href="{{ route('tasks.create') }}"
class="bg-blue-500 hover:bg-blue-600 px-4 py-2 rounded">
+ New Task
</a>
</div>

<div class="flex gap-4 mb-6">

<input type="text"
placeholder="Search Filter Task"
class="rounded p-2 text-black">

<select class="rounded p-2 text-black">
<option>Status</option>
<option>Pending</option>
<option>In Progress</option>
<option>Completed</option>
</select>

<select class="rounded p-2 text-black">
<option>Priority</option>
<option>Low</option>
<option>Medium</option>
<option>High</option>
</select>

</div>

<div class="grid grid-cols-3 gap-6">

@foreach($tasks as $task)

<div class="bg-white text-black rounded-xl p-4 shadow">

<div class="flex justify-between mb-2">
<span class="text-sm bg-blue-100 px-2 py-1 rounded">
{{ $task->status }}
</span>
</div>

<h2 class="text-lg font-bold">
{{ $task->title }}
</h2>

<p class="text-sm text-gray-600">
{{ $task->description }}
</p>

<div class="mt-2 text-sm">
Priority:
<span class="text-red-500">{{ $task->priority }}</span>
</div>

<div class="mt-4 flex justify-end gap-2">

<a href="{{ route('tasks.show',$task->id) }}"
class="bg-blue-500 text-white px-3 py-1 rounded">
View
</a>

<a href="{{ route('tasks.edit',$task->id) }}"
class="bg-gray-300 px-3 py-1 rounded">
Edit
</a>

</div>

</div>

@endforeach

</div>

</div>
</x-app-layout>