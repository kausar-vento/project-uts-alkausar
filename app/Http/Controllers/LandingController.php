<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Landing;

class LandingController extends Controller
{
    public function index()
    {
        return view('customer.index', [
            'tittles' => Landing::first()->tittle,
            'isis' => Landing::first()->isi
        ]);
    }
}
