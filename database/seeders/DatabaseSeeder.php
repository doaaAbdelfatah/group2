<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Category;
use App\Models\ContactType;
use App\Models\Product;
use App\Models\Supplier;
use App\Models\User;
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
        // $this->call(BrandSeeder::class);
        $this->call(ContactTypeSeeder::class);
        User::factory(10)->create();
        Brand::factory(10)->create();
        Category::factory(3)->create();
        Category::factory(10)->create();
        Product::factory(300)->create();
        Supplier::factory(50)->create();
        
    }
}
