<?php

class ModelTest extends TestCase {

	/**
	 * Sample Test to check database value
	 * NOTE: that when running phpunit, it will use the
	 *       Testing environment which uses SQLite database (in-memory)
	 */
	public function testEloquentFindMethodCompareTitle()
	{
		$result_expected = 'Task for monday';

		$actual_result = Todo::find(1);
		$unexpected_result = Todo::find(2);

		$this->assertEquals($result_expected, $actual_result->title);
		$this->assertNotEquals($unexpected_result->title, $actual_result->title);
	}

	/**
	 * Checks the second record
	 * and looks if the record is seeded correctly, by checking values
	 * 'title' and 'description'
	 */
	public function testEloquentFindMethodCheckValue()
	{
		$haystack = Todo::find(2)->toArray();

		$needle_title = 'Task for tuesday';
		$needle_description = 'survive until friday';

		$this->assertContains($needle_title, $haystack);
		$this->assertContains($needle_description, $haystack);
	}

	/**
	 * Checks if the model has the keys
	 *
	 */
	public function testEloquentAttributes()
	{
		$title_key = 'title';
		$description_key = 'description';

		$var = Todo::find(1);

		$this->assertArrayHasKey($title_key, $var);
		$this->assertArrayHasKey($description_key, $var);
	}

}
