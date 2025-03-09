<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Enums\StockProperty;


class StockRequest extends FormRequest
{

    public function authorize():bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            StockProperty::INDUSTRY_CATEGORY->value => ['required', 'string'],
            StockProperty::STOCK_ID->value => ['required', 'string'],
            StockProperty::TYPE->value => ['required', 'string'],
            StockProperty::STOCK_NAME->value => ['required', 'string'],
        ];
    }


    public function stockInfo():array
    {
        return $this->only([
            'industry_category',
            'stock_id',
            'type',
            'stock_name'
        ]);
    }
// TOFIX: Unable to throw custom message when stock exists
    public function message()
    {
        return [
            StockProperty::STOCK_NAME->value . '.unique' => 'This stock name already exists.',
            StockProperty::STOCK_ID->value . '.unique' => 'This stock id already exists.',
        ];
    
    }
}