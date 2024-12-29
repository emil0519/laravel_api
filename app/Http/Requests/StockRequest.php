<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StockRequest extends FormRequest
{
    public function stockInfo():array
    {
        return $this->only([
            'industry_category',
            'stock_id',
            'type',
            'stock_name'
        ]);
    }
}