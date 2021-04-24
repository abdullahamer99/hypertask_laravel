<?php


namespace App\HyperTask;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

interface Apipable
{
    public function index();

    public function show(Model $model);

    public function store(Request $request , ModelRepository $modelRepository);

    public function update(Model $model , Request $request , ModelRepository $modelRepository);

    public function delete(Model $model);
}
