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
            $table->float('subtotal');
            $table->boolean('custom_model');
            $table->string('vehicle_name');
            $table->string('vehicle_model');
            $table->string('vehicle_variant');
            $table->float('deliver_fee');
            $table->string('add_ons');
            $table->float('add_on_price');
            $table->boolean('available_for_business_lease');
            $table->float('discount_for_hire_purchase');
            $table->boolean('available_for_cash_purchase');
            $table->float('discount_for_cash_purchase');
            $table->string('margin_data');
            $table->string('van_type');
            $table->string('van_category');
            $table->string('tag_band');
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
