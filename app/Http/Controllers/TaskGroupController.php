<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskGroupRequest;
use App\HyperTask\Managable;
use App\HyperTask\ModelRepository;
use App\Models\TaskGroup;
use App\Repositories\TaskGroupRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class TaskGroupController extends Controller implements Managable
{
    //
    public function index()
    {
        // TODO: Implement index() method.
    }

    public function show(TaskGroup|Model $taskGroup)
    {
        // TODO: Implement show() method.
    }

    public function store(TaskGroupRequest|Request $taskGroupRequest,TaskGroupRepository|ModelRepository $taskGroupRepository)
    {
        // TODO: Implement store() method.
    }

    public function create()
    {
        // TODO: Implement create() method.
    }

    public function edit(TaskGroup|Model $taskGroup)
    {
        // TODO: Implement edit() method.
    }

    public function update(TaskGroup|Model $model, TaskGroupRequest|Request $taskGroupRequest, TaskGroupRepository|ModelRepository $taskGroupRepository)
    {
        // TODO: Implement update() method.
    }

    public function delete(TaskGroup|Model $taskGroup)
    {
        // TODO: Implement delete() method.
    }
}
