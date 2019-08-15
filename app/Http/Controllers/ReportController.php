<?php

namespace App\Http\Controllers;

use App\Jobs\CreateNewReport;

class ReportController extends Controller
{
    public function build()
    {
    	$limit = request()->get('limit', 20);

    	CreateNewReport::dispatch($limit);
    }
}
