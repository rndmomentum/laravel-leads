<?php

namespace Momentumplanet\LaravelLeads\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;

use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithStyles;
use Momentumplanet\LaravelLeads\Models\SaleLeads;

class LeadTemplate implements FromQuery, WithMapping, WithHeadings, ShouldAutoSize
{
    use Exportable;

    public function query()
    {
            return SaleLeads::query();
    }

    public function map($user): array
    {
        return [];
    }

    public function headings(): array
    {
        return [
            'name',
            'email',
            'phone_number',
            'source',
            'type',
            'pic_email'
        ];
    }
}
