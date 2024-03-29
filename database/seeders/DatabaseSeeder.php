<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(GoalSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(TrainingLevel::class);
        $this->call(ExerciseSeeder::class);
        $this->call(ProgramSeeder::class);
        $this->call(TrainingProgramSeeder::class);
        $this->call(GenderSeeder::class);
        $this->call(AnimalSeeder::class);
        $this->call(PowerUpsSeeder::class);
    }
}
