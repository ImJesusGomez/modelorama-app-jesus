<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Product;
use Database\Factories\ProductFactory;
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
      // product_number
      // desc
      // name
      // branch
      // price

      Product::factory(50)->create(); // Le decimos la cantidad de datos que queremos que se creen

      // $product1 = new Product();
      // $product1->product_number = 12345;
      // $product1->desc = "Esto es una descripción";
      // $product1->name = "Coronita";
      // $product1->branch = "Modelo";
      // $product1->price = "18.50";
      // $product1->save();

      
      // $product2 = new Product();
      // $product2->product_number = 12345;
      // $product2->name = "Coronita";
      // $product2->desc = "Esto es una descripción";
      // $product2->branch = "Modelo";
      // $product2->price = "18.50";
      // $product2->save();


      // \App\Models\User::factory(10)->create();
  
      // \App\Models\User::factory()->create([
      //     'name' => 'Test User',
      //     'email' => 'test@example.com',
      // ]);
    }
}

// Los seeders son utiles cuando tenemos usuarios -> admin, - Gender, - Roles, - Brand