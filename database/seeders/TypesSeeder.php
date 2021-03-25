<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class TypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('types')->insert([
			[
				'type' => 'Water',
				'colours' => '#6890F0',
			],
			[
				'type' => 'Normal',
				'colours' => NULL,
			],
			[
				'type' => 'Electric',
				'colours' => NULL,
			],
			[
				'type' => 'Ice',
				'colours' => NULL,
			],
			[
				'type' => 'Fighting',
				'colours' => NULL,
			],
			[
				'type' => 'Poison',
				'colours' => NULL,
			],
			[
				'type' => 'Ground',
				'colours' => NULL,
			],
			[
				'type' => 'Flying',
				'colours' => NULL,
			],
			[
				'type' => 'Psychic',
				'colours' => NULL,
			],
			[
				'type' => 'Rock',
				'colours' => NULL,
			],
			[
				'type' => 'Ghost',
				'colours' => NULL,
			],
			[
				'type' => 'Dark',
				'colours' => NULL,
			],
			[
				'type' => 'Dragon',
				'colours' => NULL,
			],
			[
				'type' => 'Steel',
				'colours' => NULL,
			],
			[
				'type' => 'Fairy',
				'colours' => NULL,
			],
			[
				'type' => 'Fire',
				'colours' => NULL,
			],
			[
				'type' => 'Grass',
				'colours' => '#78C850',
			],
			[
				'type' => 'Bug',
				'colours' => NULL,
			],
		]);
    }
}
