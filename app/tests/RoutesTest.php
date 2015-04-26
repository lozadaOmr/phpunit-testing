<?php

class RoutesTest extends TestCase {

	/**
	 * The main goal of testing the routes
	 * is to check endpoints, if it functions as expected
	 *
	 * ie. todos/index should be called using get
	 *     with an expected 200 OK response
	 */
	public function testTodosIndex()
	{
		$crawler = $this->client->request('GET', '/todos');

		$this->assertTrue($this->client->getResponse()->isOk());
	}

	public function testTodosCreate()
	{
		$crawler = $this->client->request('GET', '/todos/create');

		$this->assertTrue($this->client->getResponse()->isOk());
	}

	public function testTodosShow()
	{
		$crawler = $this->client->request('GET', '/todos/1');

		$this->assertTrue($this->client->getResponse()->isOk());
	}

	public function testTodosEdit()
	{
		$crawler = $this->client->request('GET', '/todos/1/edit');

		$this->assertTrue($this->client->getResponse()->isOk());
	}

	public function testTodosDestroy()
	{
		// calling the controller method directly
		$response = $this->action('DELETE', 'TodosController@destroy', ['id' => 1]);

		$this->assertTrue($this->client->getResponse()->isOk());
	}
}
