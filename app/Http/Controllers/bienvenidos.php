<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class bienvenidos extends Controller
{
    //

    public function hola() {
    	$a = 10;
    	$b = 20;
    	$c = 30;
    	return 'El valor de la suma es $c';
    	/*
    	$products = Product::all();
    	$varA = 5;
    	$varB = 7;

    	$data = [];
    	$data['products'] = $products;
    	$data['varA'] = $varA;
    	$data['varB'] = $varB;
    	return view('welcome')->with($data);
    	*/

    }
}
