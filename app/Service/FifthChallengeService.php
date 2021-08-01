<?php

namespace App\Service;

use App\Models\Task;
use App\Models\User;

class FifthChallengeService
{
    public function getListTask()
    {
        $users = User::all();
        $tasks = Task::all();
        $title = __('challenge.tasks.list');
        return compact('users', 'tasks', 'title');
    }

    public function getCreateTask()
    {
        $users = User::all();
        $title = __('challenge.tasks.create');
        return compact('users', 'title');
    }

    public function saveTask(array $validated)
    {
        Task::create($validated);
    }

    public function getLogsFromTask($id)
    {
        $task = Task::with('logs')->find($id);
        $title = __('challenge.logs.list');
        return compact('task', 'title');
    }

    public function getCreateLog($id)
    {
        $task = Task::find($id);
        $title = __('challenge.logs.create');
        return compact('task', 'title');
    }
}
