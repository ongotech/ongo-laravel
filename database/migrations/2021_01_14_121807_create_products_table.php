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
            $table->timestamps();
            $table->string('Product_Name',100);
            $table->bigInteger('Product_Category_id');
            $table->bigInteger('Product_Vendor_id');
            $table->float('Product_Vendor_location',8,8);
            $table->text('Product_description');
            $table->integer('Product_Quantity');
            $table->string('Product_price',100);
            $table->longText('Product_features');
            $table->longText('Product_brands');
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
