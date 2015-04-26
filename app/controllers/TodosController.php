<?php

class TodosController extends \BaseController {

	protected $all_todo;
	protected $my_todo;

	/**
	 * Display a listing of todos
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('todos.index')->with('todos', self::getAllTodo());
	}

	/**
	 * Show the form for creating a new todo
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('todos.create');
	}

	/**
	 * Store a newly created todo in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// mock store procedure
	}

	/**
	 * Display the specified todo.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return View::make('todos.show')->with('todo', self::getMyTodo($id));
	}

	/**
	 * Show the form for editing the specified todo.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return View::make('todos.edit')->with('todo', self::getMyTodo($id));
	}

	/**
	 * Update the specified todo in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		// mock update procedure
	}

	/**
	 * Remove the specified todo from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		// mock destroy procedure
	}

	private function getAllTodo()
	{
		return $all_todo = [
			1 => 'Cook food',
			2 => 'Do the dishes',
			3 => 'Clean the houses',
			4 => 'Buy food'
		];
	}

	private function getMyTodo($id)
	{
		$my_todo = [
			1 => 'Cook food',
			2 => 'Buy food'
		];

		return $my_todo[$id];
	}
}
