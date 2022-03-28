<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ComuneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comuni')->insert([
            'regione' => 'abruzzo',
            'provincia' => 'PE',
            'comune' => 'pescara'
        ]);

        DB::table('comuni')->insert([
            'regione' => 'molise',
            'provincia' => 'CB',
            'comune' => 'roma'
        ]);

        DB::table('comuni')->insert([
            'regione' => 'molise',
            'provincia' => 'IS',
            'comune' => 'berlino'
        ]);

        DB::table('comuni')->insert([
            'regione' => 'molise',
            'provincia' => 'CB',
            'comune' => 'kiev'
        ]);

        DB::table('comuni')->insert([
            'regione' => 'abruzzo',
            'provincia' => 'CH',
            'comune' => 'vasto'
        ]);

    }
}
