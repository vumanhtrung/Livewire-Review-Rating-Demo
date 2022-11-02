<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductUserPivotTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_user')->truncate();

        $product = Product::first();
        foreach (User::inRandomOrder()->take(20)->get() as $user) {
            $faker = \Faker\Factory::create();
            if (!$product->users->contains($user->id)) {
                $product->users()->attach($user, [
                    'review' => $faker->text(),
                    'rating' => $faker->numberBetween(1, 5),
                ]);
            }
        }
    }
}
