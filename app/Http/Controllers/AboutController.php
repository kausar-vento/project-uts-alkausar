<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller
{
    public function index()
    {
        return view('customer.tampilan_about', [
            'abouts' => About::all()
        ]);
    }
}
