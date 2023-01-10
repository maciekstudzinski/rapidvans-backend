<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('customer_name');
            $table->string('customer_email');
            $table->string('customer_dob');
            $table->string('customer_phone');
            $table->string('customer_address');
            $table->timestamp('time_at_current_address')->useCurrent();
            $table->string('residential_status');
            $table->string('postcode');
            $table->string('business_name');
            $table->string('business_type');
            $table->string('business_telephone');
            $table->string('business_address');
            $table->string('business_postcode');
            $table->date('business_date_established');
            $table->string('business_activity');
            $table->string('business_reg_no');
            $table->integer('vehicle_pickup_id');
            $table->float('initial_rental_price');
            $table->float('price_per_month');
            $table->string('contract_length');
            $table->string('order_email');
            $table->string('status');
            $table->integer('customer_id');

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
        Schema::dropIfExists('orders');
    }
}
