<?php

use App\Train;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trains = [
            [
                "azienda" => 'Trenitalia',
                "stazione_partenza" => 'Lucca',
                "stazione_arrivo" => 'Roma',
                "orario_partenza" => '9:45',
                "orario_arrivo" => '15:45',
                "codice_treno" => '5412',
                "num_carrozze" => '9',
                "puntuale" => null,
                "cancellato" => null,
            ],
            [
                "azienda" => 'Trenitalia',
                "stazione_partenza" => 'Milano',
                "stazione_arrivo" => 'Venezia',
                "orario_partenza" => '10:45',
                "orario_arrivo" => '14:15',
                "codice_treno" => '2136',
                "num_carrozze" => '5',
                "puntuale" => null,
                "cancellato" => null,
            ]
        ];

        foreach ($trains as $train) {
            $data = new Train();

            $data->azienda = $train["azienda"];
            $data->stazione_partenza = $train["stazione_partenza"];
            $data->stazione_arrivo = $train["stazione_arrivo"];
            $data->orario_partenza = $train["orario_partenza"];
            $data->orario_arrivo = $train["orario_arrivo"];
            $data->codice_treno = $train["codice_treno"];
            $data->num_carrozze = $train["num_carrozze"];
            $data->puntuale = $train["puntuale"];
            $data->cancellato = $train["cancellato"];

            $data->save();
        }
    }
}
