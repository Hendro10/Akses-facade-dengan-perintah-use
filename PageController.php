<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class PageController extends Controller
{
    public function cobaFacade()
    {
        echo Str::snake('SedangBelajarLaravelUncover');
        echo "<br>";
        echo Str::kebab('SedangBelajarLaravelUncover');
    }
}
