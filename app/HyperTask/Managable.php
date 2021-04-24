<?php


namespace App\HyperTask;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

interface Managable
{
    public function index();

    public function show(Model $model);

    public function store(Request $request , ModelRepository $modelRepository);

    public function create();

    public function edit(Model $model);

    public function update(Model $model , Request $request , ModelRepository $modelRepository);

    public function delete(Model $model);
}
