<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVansPickupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vans_pickups', function (Blueprint $table) {
            $table->id();
            $table->integer('vehicle_cap_id');
            $table->string('vehicle_name');
            $table->float('subtotal');
            $table->string('custom_model');
            $table->string('vehicle_model');
            $table->string('vehicle_variant');
            $table->string('van_type');
            $table->integer('core_stock');
            $table->integer('top_vehicle');
            $table->integer('predator');
            $table->integer('trust_ford');
            $table->integer('display_in_home');
            $table->integer('mark_as_popular');
            $table->integer('new_model');
            $table->string('delivery_time');
            $table->string('van_category');
            $table->string('tag_band');

            $table->float('delivery_fee');
            $table->string('add_ons');
            $table->float('add_on_price');

            $table->integer('available_for_business_lease');
            $table->float('business_lease_discount');
            $table->float('business_lease_margin');
            $table->float('business_lease_additional_cost');

            $table->integer('available_for_hire_purchase');
            $table->float('hire_purchase_discount');
            $table->float('hire_purchase_margin');
            $table->float('hire_additional_cost');

            $table->integer('available_for_cash_purchase');
            $table->float('discount_for_cash_purchase');
            $table->integer('cash_purchase_margin');
            $table->float('cash_purchase_additional_cost');

            $table->string('road_fund_licence');
            $table->string('dealership_id');

            $table->string('brochure');
            $table->string('status');
            $table->string('cached_cap_archive_info');
            $table->string('image_url');


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
        Schema::dropIfExists('vans_pickups');
    }
}
