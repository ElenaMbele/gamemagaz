<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->text('category');
            $table->integer('price');
            $table->text('image');
            $table->text('description');
            $table->timestamps();
        });

//        INSERT INTO products (name, category, price, image, description)
//VALUES ('The Witcher 3: Wild Hunt в разделе action', 'Action', 440, 'img/cover/game-1.jpg', ' Lorem ipsum dolor sit amet, consectetur adipisicing elit,
//                      sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
//                      minim veniam, quis nostrud exercitation ullamco laboris nisi ut
//                      aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
//                      in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
//                      Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
//                      deserunt mollit anim id est laborum. Sed ut perspiciatis
//                      unde omnis iste natus error sit voluptatem');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
