<?php

class TodosTableSeeder extends Seeder {

	public function run()
	{
		DB::table('todos')->truncate();

		Todo::create([
			'title' => 'Task for monday',
			'description' => 'Go to work yo.'
		]);

		Todo::create([
			'title' => 'Task for tuesday',
			'description' => 'survive until friday'
		]);
	}

}