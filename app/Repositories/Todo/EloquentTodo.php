<?php

namespace App\Repositories\Todo;
use App\Models\Todo;

class EloquentTodo implements TodoRepository {
  private $model;

  public function __construct(Todo $model) {
    $this->model = $model;
  }

  public function getAll(){
    return $this->model->all();
  }
  public function getById($id){
    return $this->model->find($id);
  }
  public function create(array $attributes){
    var_dump($attributes);
    return $this->model->create($attributes);
  }
  public function updateById($id, array $attributes){
    $todo = $this->model->findOrFail($id);
    return $todo->update($attributes);
  }
  public function delete($id){
    $this->model->findOrFail($id)->delete();
    return true;
  }
}
