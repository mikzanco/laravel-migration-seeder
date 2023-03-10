<?php

namespace Database\Seeders;

use Faker\Generator as Faker;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 100; $i++){
            $new_train = new Train();
            $new_train->company = $faker->company() ;
            $new_train->station_departure = $faker->city();
            $new_train->station_arrive = $faker->city();
            $new_train->date_departure = $faker->dateTime();
            $new_train->date_arrive = $faker->dateTime();
            // usando bothify mi genera un codice di n numeri pari al numero di # inseriti successivamente
            $new_train->train_code = $faker->bothify('#####');
            $new_train->carriage_number = $faker->numberBetween(1, 20);
            $new_train->in_time = $faker->boolean();
            $new_train->cancelled = $faker->boolean();
            $new_train->save();
            // dump($new_train);

        }
        /*
            $table->string('azienda',50);
            $table->string('stazione_di_partenza',100);
            $table->string('stazione_di_arrivo',100);
            $table->dateTime('orario_di_partenza');
            $table->dateTime('orario_di_arrivo');
            $table->smallInteger('codice_treno');
            $table->smallInteger('numero_carrozza')->nullable();
            $table->boolean('in_orario')->unsigned()->default(1);
            $table->boolean('cancellato')->unsigned()->default(1);
        */
    }
}
