<?php

namespace App\Http\Controllers;

use App\Http\Requests\LogRequest;
use App\Http\Requests\TaskRequest;
use App\Service\FifthChallengeService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    /**
     * @var FifthChallengeService
     */
    private $fifthChallengeService;

    public function __construct(FifthChallengeService $fifthChallengeService)
    {
        $this->fifthChallengeService = $fifthChallengeService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        return view('tasks', $this->fifthChallengeService->getListTask());
    }

    /**
     * Display a creation of the resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('task_create', $this->fifthChallengeService->getCreateTask());
    }

    /**
     * Store Task
     *
     * @return RedirectResponse
     */
    public function store(TaskRequest $request)
    {
        $this->fifthChallengeService->saveTask($request->validated());
        return redirect()->route('task_list');
    }

    /**
     * Display a logs of the task.
     *
     * @return Application|Factory|View
     */
    public function show($id)
    {
        return view('task_show', $this->fifthChallengeService->getLogsFromTask($id));
    }

    /**
     * Display a creation of the resource.
     *
     * @return Application|Factory|View
     */
    public function createLog($id)
    {
        return view('log_create', $this->fifthChallengeService->getCreateLog($id));
    }

    /**
     * Store Task
     *
     * @return RedirectResponse
     */
    public function storeLog(LogRequest $request)
    {
        $this->fifthChallengeService->saveLog($request->validated());
        return redirect()->route('log_list',$request->task_id);
    }
}
