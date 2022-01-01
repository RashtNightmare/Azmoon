<?php

namespace Database\Seeders;

use App\Models\Role;
use Carbon\Factory;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles=['Student','Teacher','Admin'];
        foreach($roles as $item){
         Role::query()->create([
           'name'=>$item
         ]);
        }
         //---------factory : makes fake data for us and is useful in testing a big amount of data 
        // $faker = Factory::create();

        // for($i = 0; $i < 1000; $i++) {
        //     Role::query()->create([
        //         'name'=>$faker->name
        //       ]);
        // }
    }
}
