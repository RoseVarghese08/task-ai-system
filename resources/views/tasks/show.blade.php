<x-app-layout>

<div class="max-w-2xl mx-auto p-6">

<h1 class="text-2xl font-bold mb-4">Task Detail</h1>

<div class="border p-4 rounded">

<h2 class="text-xl font-bold">{{ $task->title }}</h2>

<p class="mt-2">{{ $task->description }}</p>

<p class="mt-2">
<strong>Priority:</strong> {{ $task->priority }}
</p>

<p class="mt-2">
<strong>Status:</strong> {{ $task->status }}
</p>

<p class="mt-2">
<strong>Due Date:</strong> {{ $task->due_date }}
</p>

<hr class="my-4">

<h3 class="font-bold">AI Summary</h3>

<p>{{ $task->ai_summary }}</p>

<p class="mt-2">
AI Priority: <strong>{{ $task->ai_priority }}</strong>
</p>

</div>

</div>

</x-app-layout>