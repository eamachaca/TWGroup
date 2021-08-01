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
        User::factory(3)
            ->hasInvoices(10, function (array $attributes, User $user) {
                return ['seller_id' => $user->id];
            })->create();
        Product::factory(150)->create();
    }
}
