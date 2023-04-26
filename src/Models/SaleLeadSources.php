<?php

namespace Momentumplanet\LaravelLeads\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SaleLeadSources extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'sale_lead_sources';
    protected $guarded = [];
}
