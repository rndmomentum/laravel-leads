<?php

namespace Momentumplanet\LaravelLeads\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Momentumplanet\LaravelLeads\Models\SaleLeadTypes;

class SaleLeadTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SaleLeadTypes::updateOrCreate([
            'id'    => 1
        ],[
            'type'  => 'COLD LEADS'
        ]);

        SaleLeadTypes::updateOrCreate([
            'id'    => 2
        ],[
            'type'  => 'WARM LEADS'
        ]);

        SaleLeadTypes::updateOrCreate([
            'id'    => 3
        ],[
            'type'  => 'HOT LEADS'
        ]);

        SaleLeadTypes::updateOrCreate([
            'id'    => 4
        ],[
            'type'  => 'POTENTIAL LEADS'
        ]);

    }
}
