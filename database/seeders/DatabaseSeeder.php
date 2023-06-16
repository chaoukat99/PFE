<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Appointement;
use App\Models\Article;
use App\Models\Earning;
use App\Models\Expert;
use App\Models\Notification;
use App\Models\User;
use Illuminate\Database\Seeder;
use Faker\Factory as FakerFactory;
use Nette\Utils\Random;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $faker = FakerFactory::create();

        User::factory()
        ->count(3)
        ->create(['role' => 'admin']);
        User::factory()
        ->count(3)
        ->hasAttached(
            Expert::factory()
            ->has(Article::factory()->count(rand(1,10)))
            ->has(Earning::factory()->count(rand(1,5)))
            // ->has(Notification::factory()->count(rand(1,3)))

            ->count(3)
            ,
            ['date' =>$faker->date(),'status'=>$faker->randomElement(['completed', 'onHold', 'canceled'])],
        )
        ->create(['role'=>'client']);

    }
}
