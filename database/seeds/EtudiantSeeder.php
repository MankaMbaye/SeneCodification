<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\Etudiant;
class EtudiantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

        $faker = Factory::create();

        foreach(range(1,5) as $i)

        {
        	Etudiant::create([
             
             'id' => '15'.$i,
             'nom' => 'fall',
             'prenom'=> 'cheikh',
             'dateDeNaissance'=> '2018-01-03',
             'lieuDeNaissance'=> 'Dakar',
             'numtel'=> '77 787 25 14',
             'numCarteEtudiant'=>'1 7855 4789 0254',
             'sexe'=>'Masculin',
             'departement_id'=>$faker->numberBetween(1,6),
             'anneeDetude'=>'2018',



        	]);
        }
    }
}

