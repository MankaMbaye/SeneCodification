<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        DB::table('batiments')->insert([
            'nom' => str_random(10),
            'datecreation' => '2018-05-06',
            'nbrePlaceRestantes' => str_random(10),
            'contraintesexe_id' => str_random(10),
            'contrainteformation_id' => str_random(10),
            'contrainteniveau_id' => str_random(10),
        ]);
    }
}
