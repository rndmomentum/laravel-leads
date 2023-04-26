<?php

namespace Momentumplanet\LaravelLeads\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SaleLeadBulkUploads extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'sale_lead_bulk_uploads';
    protected $guarded = [];
}
