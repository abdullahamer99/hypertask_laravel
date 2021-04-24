<?php


namespace App\HyperTask;


use Illuminate\Database\Eloquent\Model;

interface ModelRepository
{
    public function save( array $data) : Model;

    public function update( array $data ,  Model $model ) : Model;
}
