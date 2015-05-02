<?php

class ViewTest extends TestCase {

	/**
	 * Testing views
	 *
	 * we basically test if the view receives
	 * the variable 'todos'
	 */
	public function testViewTodosIndexHasTodos()
	{
		// arrange and act
		$this->call('GET', 'todos');

		// assert
		$this->assertViewHas('todos');
	}

	public function testViewTodosShowHasTodo()
	{
		// arrange and act
		$this->call('GET', 'todos/1');

		// assert
		$this->assertViewHas('todo');
	}

	public function testViewTodosEditHasTodo()
	{
		// arrange and act
		$this->call('GET', 'todos/1/edit');

		// assert
		$this->assertViewHas('todo');
	}
}
