<?php

namespace Database\Seeders;

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
				'colours' => '#A8A878',
			],
			[
				'type' => 'Electric',
				'colours' => '#F8D030',
			],
			[
				'type' => 'Ice',
				'colours' => '#98D8D8',
			],
			[
				'type' => 'Fighting',
				'colours' => '#C03028',
			],
			[
				'type' => 'Poison',
				'colours' => '#A040A0',
			],
			[
				'type' => 'Ground',
				'colours' => '#E0C068',
			],
			[
				'type' => 'Flying',
				'colours' => '#A890F0',
			],
			[
				'type' => 'Psychic',
				'colours' => '#F85888',
			],
			[
				'type' => 'Rock',
				'colours' => '#B8A038',
			],
			[
				'type' => 'Ghost',
				'colours' => '#705898',
			],
			[
				'type' => 'Dark',
				'colours' => '#705848',
			],
			[
				'type' => 'Dragon',
				'colours' => '#7038F8',
			],
			[
				'type' => 'Steel',
				'colours' => '#B8B8D0',
			],
			[
				'type' => 'Fairy',
				'colours' => '#FF85FD',
			],
			[
				'type' => 'Fire',
				'colours' => '#F08030',
			],
			[
				'type' => 'Grass',
				'colours' => '#78C850',
			],
			[
				'type' => 'Bug',
				'colours' => '#A8B820',
			],
		]);
    }
}
