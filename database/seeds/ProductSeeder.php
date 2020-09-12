<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Product::class, 10)->create();
    }
}

//INSERT INTO categories (name, description)
//VALUES ('Action', 'ckk');
//INSERT INTO categories (name, description)
//VALUES ('RPG', 'ckk');
//INSERT INTO categories (name, description)
//VALUES ('Квесты', 'ckk');
//INSERT INTO categories (name, description)
//VALUES ('Онлайн-игры', 'ckk');
//INSERT INTO categories (name, description)
//VALUES ('Стратегии', 'ckk');
