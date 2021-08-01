<?php

namespace Database\Seeders;

use App\Models\Product;
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
        User::factory(10)
            ->hasInvoices(30, function (array $attributes, User $user) {
                return ['seller_id' => $user->id];
            })->create();
        Product::factory(5000)->create();
    }
}
