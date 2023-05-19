<?php

namespace App\Http\Controllers;

use App\Models\AllProduct;
use App\Models\BestSeller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class DetailAllController extends Controller
{
    public function index()
    {
        $all_products = AllProduct::all();
        return view('detailAll', compact('all_products'));
    }



    public function show_detail($product_id)
    {
        $product = AllProduct::findOrFail($product_id);
        $best_seller = BestSeller::where('product_id', $product->product_id)->get();



        return view('show_detail', compact('product', 'best_seller'));
    }


    public function home()
    {
        $all_products = AllProduct::all();
        return view('home', compact('all_products'));
    }
    




}
