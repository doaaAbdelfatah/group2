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
            $table->string("name");
            $table->decimal("price" ,10,2 );
            $table->integer("qty");
            $table->foreignId("brand_id")->nullable();
            $table->foreign("brand_id")->references("id")->on("brands");
            $table->foreignId("category_id");
            $table->foreign("category_id")->references("id")->on("categories");
            $table->foreignId("user_id")->nullable();
            $table->foreign("user_id")->references("id")->on("users");
            $table->timestamps();
        });
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
