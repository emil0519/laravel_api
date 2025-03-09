<?php

namespace Tests\Feature\Stocks;

use Tests\TestCase;
use App\Models\Stock;

class FetchStockTest extends TestCase
{
    /** @test */
    public function fetch_all_stocks()
    {
        $this->withoutExceptionHandling();

        $response = $this->get('/api/stocks');

        $response->assertStatus(200);
    }

    /** @test */
    public function update_specific_stock()
    {
        $this->withoutExceptionHandling();

        Stock::factory()->create([
            'industry_category' => 'test',
            'stock_id' => '9906',
            'type' => 'test',
            'stock_name' => 'Test'
        ]);
        $foundedStock = Stock::where('stock_id','9906')->first();

        $this->assertNotNull($foundedStock);


        $response = $this->postJson("/api/stocks/{$foundedStock->stock_id}",$foundedStock->toArray());


        $this->assertNotNull($response);
    }


}