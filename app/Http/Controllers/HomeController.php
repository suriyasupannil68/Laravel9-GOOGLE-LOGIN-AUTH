<?php

namespace App\Http\Controllers;

use App\Models\AllProduct;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $all_products = AllProduct::all();

        return view('home', compact('all_products'));
    }
}
