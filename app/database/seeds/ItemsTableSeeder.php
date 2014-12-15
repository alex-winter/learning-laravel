<?php

class ItemsTableSeeder extends Seeder {
	public function run() {
		DB::table('items')->delete();

		//test data
		$items = array(
			array(
				'owner_id' => 1,
				'name' => 'Pick up milk',
				'done' => false
			),

			array(
				'owner_id' => 1,
				'name' => 'walk dogs',
				'done' => true
			),

			array(
				'owner_id' => 1,
				'name' => 'Cook dinner',
				'done' => false
			)

		);

		DB::table('items')->insert($items);
	}
}