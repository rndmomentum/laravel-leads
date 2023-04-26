<?php

namespace Momentumplanet\LaravelLeads\Seeders;

use Illuminate\Database\Seeder;
use Momentumplanet\LaravelLeads\Models\SaleLeadSources;

class SaleLeadSourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        SaleLeadSources::updateOrCreate([
            'id'        => 1,
        ],
        [
            'source'    => 'Facebook'
        ]);

        SaleLeadSources::updateOrCreate([
            'id'        => 2,
        ],[
            'source'    => 'Instagram'
        ]);

        SaleLeadSources::updateOrCreate([
            'id'        => 3
        ],[
            'source'    => 'Whatsapp'
        ]);

        SaleLeadSources::updateOrCreate([
            'id'        => 4
        ],[
            'source'    => 'Lead Gen'
        ]);

        SaleLeadSources::updateOrCreate([
            'id'        => 5
        ],[
            'source'    => 'Landing Pages'
        ]);

        SaleLeadSources::updateOrCreate([
            'id'        => 6
        ],[
            'source'    => 'GO Umrah'
        ]);

        SaleLeadSources::updateOrCreate([
            'id'        => 7
        ],[
            'source'    => 'Telegram'
        ]);

        SaleLeadSources::updateOrCreate([
            'id'        => 8
        ],[
            'source'    => 'Tik Tok'
        ]);

        SaleLeadSources::updateOrCreate([
            'id'        => 9
        ],[
            'source'    => 'Walk In'
        ]);
    }
}
