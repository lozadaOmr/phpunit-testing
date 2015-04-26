<?php

class RoutesTest extends TestCase {

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
}
