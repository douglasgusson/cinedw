<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GeneroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('generos')->insert([
            [
                'nome' => 'Comédia'
            ],
            [
                'nome' => 'Ação'
            ],
            [
                'nome' => 'Terror'
            ]
        ]);
    }
}
