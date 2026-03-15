<?php
namespace App\Services;

use App\Models\Task;

class AIService
{
    public function generateSummary(Task $task): array
    {
        $summary = "Task '{$task->title}' should be completed before {$task->due_date}. Priority suggested: high.";

        return [
            'ai_summary' => $summary,
            'ai_priority' => 'high'
        ];
    }
}