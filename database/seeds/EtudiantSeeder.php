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
             
        
             'nom' => 'Toure',
             'prenom'=> 'Ousmane',
             'dateDeNaissance'=> '2018-01-03',
             'lieuDeNaissance'=> 'Yarakh',
             'adresse'=>'Fann',
             'niveau'=>'DUT2',
             'numtel'=> '77 787 25 14',
             'numCarteEtudiant'=> $faker->numberBetween(1210 ,36957),
             'sexe'=>'Masculin',
             'departement_id'=>$faker->numberBetween(1,6),
             'anneeDetude'=>'2018',



        	]);
        }
    }
}

