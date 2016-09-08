<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Repositories\Todo\TodoRepository;
use App\Http\Requests\TodoRequest;

class TodoController extends Controller
{
    private $todo;

    public function __construct(TodoRepository $todo_repo) {
      $this->todo = $todo_repo;
    }
    
    public function index() {
      return $this->todo->getAll();
    }
    
    public function show($id) {
      return $this->todo->getById($id);
    }
    
    public function create() {
      return response()->json([
        'info' => 'create method need view for process',
        'dwikuntobayu' => 'mamen'
      ]);
    }
    
    public function store(TodoRequest $request) {
      if($this->todo->create($request->all())) {
        return response()->json([
          'info' => 'success add todo'
        ]);
      } else {
        return response()->json([
          'info' => 'fails add todo'
        ]);
      }
    }
    
    public function edit($id) {
      return response()->json([
        'info' => 'edit method need view for process',
        'dwikuntobayu' => 'mamen',
        'data' => $this->todo->getById($id)
      ]);
    }
    
    public function update($id, TodoRequest $request) {
      if($this->todo->updateById($id, $request->all())) {
        return response()->json([
          'info' => 'success add todo',
          'dwikuntobayu' => $id,
          'data' => $request
        ]);
      } else {
        return response()->json([
          'info' => 'fails add todo',
          'dwikuntobayu' => $id,
          'data' => $request
        ]);
      }
    }
    
    public function edit_data($id, TodoRequest $request) {
      return response()->json([
        'dwikuntobayu' => $id,
        'data' => $request
      ]);
      // if($this->todo->updateById($id, $request->all())) {
        // return response()->json([
          // 'info' => 'success add todo'
        // ]);
      // } else {
        // return response()->json([
          // 'info' => 'fails add todo',
          // 'dwikuntobayu' => $id
        // ]);
      // }
    }
    
    public function destroy($id) {
      if($this->todo->delete($id)) {
        return response()->json([
          'info' => 'success delete todo'
        ]);
      } else {
        return response()->json([
          'info' => 'fails delete todo'
        ]);
      }
    }
}
