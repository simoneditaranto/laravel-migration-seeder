<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// importo Faker
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {   
        for($i = 0; $i < 20; $i++) {

            $newTrain = new Train();

            $newTrain->azienda = $faker->word();
            $newTrain->s_partenza = $faker->city();
            $newTrain->s_arrivo = $faker->city();
            $newTrain->orario_partenza = $faker->time();
            $newTrain->orario_arrivo = $faker->time();
            $newTrain->codice_treno = $faker->regexify('[A-R]{2}[0-9]{5}');
            $newTrain->n_carrozze = $faker->numberBetween(5, 12);
            $newTrain->cancellato = $faker->boolean();
            if($newTrain->cancellato) {
                $newTrain->in_orario = null;
            } else {
                $newTrain->in_orario = $faker->boolean();
            }

            $newTrain->save();
        }
    }
}
