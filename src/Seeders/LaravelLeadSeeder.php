<?php

namespace Momentumplanet\LaravelLeads\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LaravelLeadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            SaleLeadTypeSeeder::class,
            SaleLeadSourceSeeder::class,
        ]);
    }
}
