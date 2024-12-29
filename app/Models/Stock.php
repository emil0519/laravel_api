<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;

    protected $table = 'stocks';

    protected $primaryKey = 'id';

    protected  $timestamp = true;

    // which column can be mass assigned
    protected $fillable = [
        'industry_category',
        'stock_id',
        'type',
        'stock_name'
    ];
    // hidden, visible

    // public static function new(array $request):self
    // {
    //     return self::create([

    //     ])
    // }

    public static function new(array $request):self{
        return self::create([
            'industry_category' => $request["industry_category"],
            'stock_id' => $request['stock_id'],
            'type' =>$request['type'],
            'stock_name' =>$request['stock_name']
        ]);
    }

}