<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   
        // creo una nuova istanza di Train
        $newTrain = new Train();
        $newTrain->azienda = 'Trenitalia';
        $newTrain->s_partenza = 'Torino porta nuova';
        $newTrain->s_arrivo = 'Milano Centrale';
        $newTrain->orario_partenza = '14:30';
        $newTrain->orario_arrivo = '16:30';
        $newTrain->codice_treno = 'RV3175';
        $newTrain->n_carrozze = 10;
        $newTrain->in_orario = true;
        $newTrain->cancellato = false;

        // salvo il treno appena creato che voglio aggiungere
        $newTrain->save();
        
    }
}
