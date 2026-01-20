<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\BrandLogo;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function home()
    {

        $brandLogos = BrandLogo::active()
            ->ordered()
            ->get();


        return view('home', compact('brandLogos'));
    }
}
