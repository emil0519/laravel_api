<?php

namespace App\Http\Controllers;
use App\Models\Stock;

use Illuminate\Http\Request;

class StockController extends Controller{
    public function index()
    {
        $stocks = Stock::all();
    
        return response()->json($stocks); 
    }
    public function store(Request $request){

        $stock = Stock::create([
            "industry_category"=>$request->input('industry_category'),
            "stock_id"=>$request->input('stock_id'),
            "type"=>$request->input('type'),
            "stock_name"=>$request->input('stock_name'),
        ]);

        return $stock;
    }

    public function edit($id){

        $stock = Stock::find($id)->first();

        return $stock;
        
    }

    public function update($request, $id){

        $stock = Stock::where('id',$id)->update([
            "industry_category"=>$request->input('industry_category'),
            "stock_id"=>$request->input('stock_id'),
            "type"=>$request->input('type'),
            "stock_name"=>$request->input('stock_name'),
        ]);
    }

    public function destroy(Stock $stock){
        // $stock = Stock::find($id)->first();
        $stock->delete();
    }
}