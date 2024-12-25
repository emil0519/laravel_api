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

}