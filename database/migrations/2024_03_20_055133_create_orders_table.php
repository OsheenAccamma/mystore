<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Customer_Emailid');
            $table->string('Delivery_Address');
            $table->string('Order_Details');
            $table->float('Coupen_Code')->nullable();
            $table->double('Amount',8,2);
            $table->string('paymentmode');
            $table->string('Shipping_Status')->default('pending');
            $table->string('Delivery_Status')->default('pending');
            $table->tinyInteger('Order_Cancel_Status')->default('0');
            $table->string('Order_Cancelled_On')->nullable();
            $table->string('p_status')->default('pending');
            $table->string('p_status_Updated_By')->nullable();



            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
