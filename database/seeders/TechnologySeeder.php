<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//Models
use App\Models\Technology;
use Illuminate\Support\Facades\Schema;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::withoutForeignKeyConstraints(function() {
            Technology::truncate();
        });
        // Technology::truncate();

        for ($i=0; $i<10; $i++) { 
            
            Technology::create([
                // 'name' => fake()->name(),
                'name' => fake()->words(rand(1,5), true),
                'type' => fake()->sentence(),
                'date_create' => fake()->date(),
                'description' => fake()->paragraph()
            ]);
        }
    }
}
