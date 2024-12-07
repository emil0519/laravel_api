<?php

namespace App\Http\Controllers;

use Illuminate\HTTP\Request;

class ProductController extends Controller{
    public function index(){
        $title = 'this is title';
        $data=[
            'productOne'=>'Samsung',
            'productTwo'=>'iPhone'
        ];
        // return view('products.index',compact('title'));
        // return view('products.index')->with('data',$data);

        return view('products.index',
        ['data'=>$data]);
    }
}