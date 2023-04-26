<?php

namespace Momentumplanet\LaravelLeads;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;
use Momentumplanet\LaravelLeads\Exports\LeadTemplate;

class LaravelLeads
{
    public static function upload($file)
    {
        $request['file'] = $file;
        $request['extension'] = (!empty($file))?strtolower($file->getClientOriginalExtension()):null;

        $validator = validator::make($request,[
            'file' => ['required'],
            'extension' => ['in:xlsx']
        ]);

        if($validator->fails()){
            return Redirect::back()->withErrors(['file' => 'Please upload excel file']);
        }

        //success
        $path = $file->store(config('laravel-leads.storage').'/'.time());

        //process documents

    }

    public static function download_template()
    {
        return Excel::download(new LeadTemplate,'template.xlsx');
    }
}
