<?php

namespace Database\Seeders;


use App\Models\Client;
use App\Models\Product;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    
    {
        
        Client::factory(10)->create();
        Product::factory(10)->create();
        Order::factory(10)->create();
        OrderItem::factory(10)->create();
    }
}
