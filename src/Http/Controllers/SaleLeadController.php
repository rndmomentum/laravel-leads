<?php

namespace Momentumplanet\LaravelLeads\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use Momentumplanet\LaravelLeads\Exports\LeadTemplate;
use Momentumplanet\LaravelLeads\Http\Requests\BulkUploadSaleLeadRequest;
use Momentumplanet\LaravelLeads\Jobs\StoringBulkUploadSaleLeads;
use Momentumplanet\LaravelLeads\Models\SaleLeadBulkUploads;

class SaleLeadController extends Controller
{
    public function bulk_upload()
    {
        return view('momentumplanet::bulk-upload');
    }

    public function processing_upload(BulkUploadSaleLeadRequest $request)
    {
        $path = $request->file('file')->store(config('laravel-leads.storage'));
        $saleBulkUpload = SaleLeadBulkUploads::create([
            'path' => $path,
            'mime_type' => null,
            'filename' => null,
            'mime_type' => $request->file->getClientMimeType() ?? null,
            'filename' => $request->file->getClientOriginalName() ?? null,
            'size'      => $request->file->getSize() ?? null,
            'is_lead_imported' => 0
        ]);

        //dispatch job
        StoringBulkUploadSaleLeads::dispatch($saleBulkUpload);

        return response()->json([
            'status' => true,
            'path' => $path
        ]);
    }

    public function download_template()
    {
        return Excel::download(new LeadTemplate,'template.xlsx');
    }
}
