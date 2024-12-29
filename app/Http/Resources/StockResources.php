<?php

namespace App\Http\Resources;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Request;

class StockResources extends JsonResource
{
    // toArray is a reserved function that automatically run by JsonResource
    // use it to process data, e.g. hide or process some field, or insert one to many data
    public function toArray(Request $request): array
    {
        return[
            "industry_category"=>$this->industry_category,
            "stock_id"=>$this->stock_id,
            "type"=>$this->type,
            "stock_name"=>$this->stock_name,
        ];
    }
}