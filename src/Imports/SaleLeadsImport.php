<?php

namespace Momentumplanet\LaravelLeads\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Momentumplanet\LaravelLeads\Models\SaleLeads;

class SaleLeadsImport implements ToModel, WithBatchInserts, WithHeadingRow
{
    private $id;

    function __construct($id)
    {
        $this->id = $id;
    }

    public function model(array $row)
    {
        return new SaleLeads([
            'name'              => $row['name'],
            'email'             => $row['email'],
            'phone_number'      => $row['phone_number'],
            'source'            => $row['source'],
            'type'              => $row['type'],
            'sale_pic'          => $row['pic_email'],
            'is_bulk_upload'    => 1,
            'bulk_upload_id'    => $this->id
        ]);
    }

    public function batchSize(): int
    {
        return 1000;
    }

}
