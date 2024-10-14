<?php

namespace Database\Seeders;

use App\Http\Controllers\BrandController;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Model::unguard();
        $this->call(BrandsTableSeeder::class);
        $this->call(CircuitsTableSeeder::class);
        $this->call(CarsTableSeeder::class);
    }
}
