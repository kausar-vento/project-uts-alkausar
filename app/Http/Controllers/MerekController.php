<?php

namespace App\Http\Controllers;
use App\Models\Merek;

use Illuminate\Http\Request;

class MerekController extends Controller
{
    public function index()
    {
        return view('customer.merk_brand', [
            'mereks' => Merek::all()
        ]);
    }

}
