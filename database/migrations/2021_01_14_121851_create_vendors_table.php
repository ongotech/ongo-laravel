<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendors', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->longText('Vendor_address');
            $table->string('Vendor_contact_number',12);
            $table->string('Vendor_Contact_email')->unique();
            $table->string('Vendor_city',100);
            $table->string('Vendor_state',100);
            $table->bigInteger('Vendor_user_id');
            $table->float('Vendor_rating',1,1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vendors');
    }
}
