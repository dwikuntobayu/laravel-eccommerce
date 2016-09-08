<?php
/*
 * 1. create TodoRepository.php (as pattern)
 * 2. create EloquenTodo.php (as implementation)
 * 3. create Todo.php (as model for business layer)
 * 4. create migration Todo (for create table todo)
 * 5. create TodoController.php (as business implementation)
 * 6. create singleton at AppServiceProvider.php (for automatic load implementation when call TodoRepository)
 * 7. setup routes for todo.php (this use for API), and register at RouteServiceProvider.php
 * 8. create TodoRequest.php (for handle request n validation)
 * 9. setup exclude route for API (at VerifyCsrfToken.php)
 */
namespace App\Repositories\Todo;

interface TodoRepository {
  public function getAll();
  public function getById($id);
  public function create(array $attributes);
  public function updateById($id, array $attributes);
  public function delete($id);
}
