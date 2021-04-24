<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\HyperTask\Managable;
use App\HyperTask\ModelRepository;
use App\Models\Task;
use App\Repositories\TaskRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class TaskController extends Controller implements Managable
{
    //
    public function index()
    {
        // TODO: Implement index() method.
    }

    public function show(Task|Model $task)
    {
        // TODO: Implement show() method.
    }

    public function store(TaskRequest|Request $request,TaskRepository|ModelRepository $taskRepository)
    {
        // TODO: Implement store() method.
    }

    public function create()
    {
        // TODO: Implement create() method.
    }

    public function edit(Task|Model $task)
    {
        // TODO: Implement edit() method.
    }

    public function update(Task|Model $task,TaskRequest|Request $taskRequest,TaskRepository|ModelRepository $taskRepository)
    {
        // TODO: Implement update() method.
    }

    public function delete(Task|Model $task)
    {
        // TODO: Implement delete() method.
    }
}
