<?php

namespace App\Service;

use App\Mail\LogCreated;
use App\Models\Log;
use App\Models\Task;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class FifthChallengeService
{
    public function getListTask()
    {
        $users = User::all();
        $tasks = Task::all();
        $now = Carbon::now()->toDate();
        $title = __('challenge.tasks.list');
        return compact('users', 'tasks', 'title', 'now');
    }

    public function getCreateTask()
    {
        $users = User::all();
        $title = __('challenge.tasks.create');
        return compact('users', 'title');
    }

    public function saveTask(array $validated)
    {
        try {
            Task::create($validated);
            Session::flash('success', 'Task was created successful!');
        } catch (\Exception $ignored) {
            Session::flash('error', "Task wasn't created successful!");
        }
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

    public function saveLog(array $validated)
    {
        DB::beginTransaction();
        try {
            $log = Log::with(['task', 'task.user', 'task.author'])->find(Log::create($validated)->id);
            Mail::to($log->task->author)->send(new LogCreated($log));
            Session::flash('success', 'Log was created successful!');
            DB::commit();
        } catch (\Exception $ignored) {
            dd($ignored);
            Session::flash('error', "Log wasn't created successful!");
            DB::rollBack();
        }
    }
}
