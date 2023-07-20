<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $title = 'Laravel App from Trinh Dinh Vu';
        $x = 23;
        $y = 13;
        // return view('products.index', compact('title', 'x', 'y'));
        $name = 'vu';
        // return view('products.index')->with('name', $name);
        $myphone = [
            'name' => 'iphone',
            'year' => '2014',
            'isfavorited'=>'true'
        ];
        // return view('products.index', compact('myphone'));
        return view('products.index', [
            'myphone' => $myphone
        ]);
    }

    public function detail($id){
        return "product's id = ".$id;    
    }
}