<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BrandLogo;



use App\Models\BrandLogo;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function home()
    {
        $brands = BrandLogo::active()->ordered()->get();
        //
        
        return view('home', compact('brands'));
    }
    
}
