<?php

namespace Momentumplanet\LaravelLeads\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Maatwebsite\Excel\Facades\Excel;
use Momentumplanet\LaravelLeads\Imports\SaleLeadsImport;
use Momentumplanet\LaravelLeads\Models\SaleLeadBulkUploads;

class StoringBulkUploadSaleLeads implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    private $saleLeadBulkUploads;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(SaleLeadBulkUploads $saleLeadBulkUploads)
    {
        $this->saleLeadBulkUploads = $saleLeadBulkUploads;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //storing bulk uploaded data
        Excel::import(new SaleLeadsImport($this->saleLeadBulkUploads->id),$this->saleLeadBulkUploads->path);
        $this->saleLeadBulkUploads->is_lead_imported = 1;
        $this->saleLeadBulkUploads->save();
    }
}
