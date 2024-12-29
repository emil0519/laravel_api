<?php

namespace App\Http\Controllers;
use App\Http\Resources\StockResources;
use App\Models\Stock;

use Illuminate\Http\Request;
use App\Http\Requests\StockRequest;

class StockController extends Controller{
    public function index()
    {
        $stocks = Stock::all();
        // make the single instance of $stock in array
        return StockResources::collection($stocks); 
    }
    public function show(Stock $stock)
    {
        return StockResources::make($stock);
    }
    public function store(StockRequest $request){
        // stockInfo restrict only these fields will be stored
        $stock = Stock::new($request->stockInfo());
        return new StockResources($stock);
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