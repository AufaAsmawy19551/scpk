<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Processor;
use Carbon\Carbon;

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

        // Processor::create([
        //     'title' =>'',
        //     'price' =>,
        //     'core' =>,
        //     'thread' =>,
        //     'boost_clock' =>,
        //     'cache' =>,
        //     'tdp' =>,
        //     'socket' =>'',
        //     'launch' =>,
        // ]);

        Processor::create([
            'title' => 'Core i9	11900K',
            'price' => 539,
            'core' => 8,
            'thread' => 16,
            'boost_clock' => 5.2,
            'cache' => 16,
            'tdp' => 125 ,
            'socket' =>'LGA 1200',
            'launch' => 2021,
        ]);

        Processor::create([
            'title' => 'Core i9	11900KF',
            'price' => 513,
            'core' => 8,
            'thread' => 16,
            'boost_clock' => 5.2,
            'cache' => 16,
            'tdp' => 125 ,
            'socket' =>'LGA 1200',
            'launch' => 2021,
        ]);

        Processor::create([
            'title' => 'Core i9	11900',
            'price' => 439,
            'core' => 8,
            'thread' => 16,
            'boost_clock' => 5.1,
            'cache' => 16,
            'tdp' => 65 ,
            'socket' =>'LGA 1200',
            'launch' => 2021,
        ]);

        Processor::create([
            'title' => 'Core i9	11900F',
            'price' => 422,
            'core' => 8,
            'thread' => 16,
            'boost_clock' => 5.1,
            'cache' => 16,
            'tdp' => 65 ,
            'socket' =>'LGA 1200',
            'launch' => 2021,
        ]);

        Processor::create([
            'title' => 'Core i9	11900T',
            'price' => 439,
            'core' => 8,
            'thread' => 16,
            'boost_clock' => 4.9,
            'cache' => 16,
            'tdp' => 35 ,
            'socket' =>'LGA 1200',
            'launch' => 2021,
        ]);
    }
}
