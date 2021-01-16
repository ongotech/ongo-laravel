<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCouponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coupons', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('Coupon_Name',100);
            $table->integer('Coupon_Quantity');
            $table->bigInteger('Coupon_Category_id');
            $table->bigInteger('Coupon_Vendor_id');
            $table->float('Coupon_Vendor_location',8,8);
            $table->longText('Coupon_description');
            $table->dateTime('Coupon_startdate');
            $table->dateTime('Coupon_enddate');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coupons');
    }
}
