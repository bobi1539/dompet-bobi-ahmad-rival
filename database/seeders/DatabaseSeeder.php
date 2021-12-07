<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\CategoryStatus;
use App\Models\Pocket;
use App\Models\PocketStatus;
use App\Models\Transaction;
use App\Models\TransactionStatus;
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
        // \App\Models\User::factory(10)->create();
        
        PocketStatus::create([
            'name' => 'aktif'
        ]);

        PocketStatus::create([
            'name' => 'tidak aktif'
        ]);

        Pocket::factory(30)->create();

        CategoryStatus::create([
            'name' => 'aktif'
        ]);

        CategoryStatus::create([
            'name' => 'tidak aktif'
        ]);

        Category::factory(30)->create();

        TransactionStatus::create([
            'name' => 'Masuk'
        ]);

        TransactionStatus::create([
            'name' => 'Keluar'
        ]);

        Transaction::factory(30)->create();

        
    }
}
