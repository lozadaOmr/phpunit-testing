<?php

class ControllerTest extends TestCase {

	/**
	 * Testing usually involves three general steps
	 *
	 * [1] arrange - setup to mock
	 * [2] act     - do the thing (ex: send e-mail, save data)
	 * [3] assert  - check the results of the act
	 */
	public function testGetAllTodo()
	{
		// Arrange
		$var = new TodosController;
		$result_expected = [
			1 => 'Cook food',
			2 => 'Do the dishes',
			3 => 'Clean the houses',
			4 => 'Buy food'
		];

		// Act
		$actual_result = $var->getAllTodo();

		// Asssert
		$this->assertSame($result_expected, $actual_result);
	}

	/**
	 * Always start with Unit Testing
	 *
	 * ie. testing the smallest (sensible) thing
	 *     in this case functions
	 */
	public function testGetMyTodo()
	{
		// Arrange
		$var = new TodosController;
		$result_expected = 'Cook food';

		// Act
		$actual_result = $var->getMyTodo(1);

		// Asssert
		$this->assertSame($result_expected, $actual_result);
	}

	/**
	 * You can also do unit test to check for specific stuff
	 *
	 * ie. check if session value exist
	 */
	public function testGetAllTodoHasStuff()
	{
		$var = new TodosController;
		$haystack = $var->getAllTodo();
		$needle = 'Clean the houses';
		$this->assertContains($needle, $haystack);
	}

	/**
	 * Test if TodoController@store works
	 * just test the redirect part only
	 */
	public function testTodosStoreRedirectToIndex()
	{
		$response = $this->action('POST', 'TodosController@store',
			['title' => 'test-post',
			 'description' => 'this is just a description test']);

		// test to make sure we redirect
		$this->assertRedirectedToRoute('todos.index');
	}

	/**
	 * Remember test on routes should mainly concert with HTTP responses
	 * otherwise move checking of redirects or process into a controller test
	 */
	public function testTodosUpdateRedirectToShow()
	{
		$crawler = $this->client->request('PATCH', '/todos/1');

		$this->assertRedirectedToRoute('todos.show', 1);
	}

	public function testTodosHasSession()
	{
		$var = new TodosController;
		$var->session('key', 'checklist');

		$this->assertSessionHas(['key' => 'checklist']);
	}

	/**
	 * Check if returned HTML tags match
	 *
	 * Useful for checking DOM
	 */
	public function testTodoCreateContainsHeading()
	{
		$crawler = $this->client->request('GET', '/todos/create');

		$heading = $crawler->filter('h1')->eq(0)->text();

		$this->assertEquals('Create new Todo', $heading);
	}

	public function testTodoShowContainsHeading()
	{
		$crawler = $this->client->request('GET', '/todos/1');

		$heading = $crawler->filter('h1')->eq(0)->text();

		$this->assertEquals('You are viewing Todo:', $heading);
	}

	public function testTodoEditContainsHeading()
	{
		$crawler = $this->client->request('GET', '/todos/1/edit');

		$heading = $crawler->filter('h1')->eq(0)->text();

		$this->assertEquals('Do you want to Edit Todo', $heading);
	}

	public function testTodoIndexContainsHeading()
	{
		$crawler = $this->client->request('GET', '/todos');

		$list_item = $crawler->filter('li')->eq(0)->text();

		$this->assertEquals('Cook food', $list_item);
	}
}
