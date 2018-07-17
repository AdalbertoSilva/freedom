<?php

use App\Technique;
use Illuminate\Database\Seeder;

class TechniqueTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        Technique::truncate();

        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 50; $i++) {

            $effect = $faker->numberBetween(0,5);
            $form = $faker->numberBetween(0,2);
            $area = $faker->numberBetween(0,2);
            $duration = $faker->numberBetween(0,2);
            $execution = $faker->numberBetween(-2,2);
            $restriction = $faker->numberBetween(-2,0);

            $difficulty = $effect + $form + $area + $duration + $execution + $restriction;

            Technique::create([
                'name' => $faker->name(),
                'difficulty' => $difficulty*3,
                'effect' => $effect*3,
                'form' => $form*3,
                'area' => $area*3,
                'duration' => $duration*3,
                'execution' => $execution*3,
                'restriction' => $restriction*3,
                'description' => $faker->text(50),
                'user_id' => 1
            ]);
        }
    }
}
