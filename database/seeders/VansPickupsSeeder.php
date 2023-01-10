<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VansPickupsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vans_pickups')->insert(
            [
                'vehicle_cap_id' => 54020,
                'vehicle_name' => "FORD TRANSIT CONNECT",
                'subtotal' => 24951.11,
                'custom_model' => "None",
                'vehicle_model' => "TRANSIT CONNECT 220 L1 DIESEL",
                'vehicle_variant' => '1.5 EcoBlue 75ps Trend Van',
                'van_type' => "Panel Van",
                'core_stock' => 1,
                'top_vehicle' => 0,
                'predator' => 0,
                'trust_ford' => 0,
                'display_in_home' => 0,
                'mark_as_popular' => 0,
                'new_model' => 0,
                'delivery_time' => "Do not display",
                'van_category' => "Panel van",
                'tag_band' => 'Sample',
                'delivery_fee' => 496.37,
                'add_ons' => "None",
                'add_on_price' => 0,
                'available_for_business_lease' => 1,
                'business_lease_discount' => 0,
                'business_lease_margin' => 0,
                'business_lease_additional_cost' => 0,
                'available_for_hire_purchase' => 1,
                'hire_purchase_discount' => 0,
                'hire_purchase_margin' => 0,
                'hire_additional_cost' => 0,
                'available_for_cash_purchase' => 1,
                'discount_for_cash_purchase' => 0,
                'cash_purchase_margin' => 0,
                'cash_purchase_additional_cost' => 0,
                'road_fund_licence' => '290',
                'dealership_id' => 1,
                'brochure' => '-',
                'status' => "-",
                'cached_cap_archive_info' => "-",
                'image_url' => "-",
            ],
            [
                'vehicle_cap_id' => 54021,
                'vehicle_name' => "FORD TRANSIT",
                'subtotal' => 24350.11,
                'custom_model' => "None",
                'vehicle_model' => "TRANSIT 220 L1 DIESEL",
                'vehicle_variant' => '2.0 EcoBlue 75ps Trend Van',
                'van_type' => "Box Van",
                'core_stock' => 1,
                'top_vehicle' => 0,
                'predator' => 0,
                'trust_ford' => 0,
                'display_in_home' => 0,
                'mark_as_popular' => 0,
                'new_model' => 0,
                'delivery_time' => "Do not display",
                'van_category' => "Box van",
                'tag_band' => 'Sample',
                'delivery_fee' => 596.37,
                'add_ons' => "None",
                'add_on_price' => 0,
                'available_for_business_lease' => 1,
                'business_lease_discount' => 0,
                'business_lease_margin' => 0,
                'business_lease_additional_cost' => 0,
                'available_for_hire_purchase' => 1,
                'hire_purchase_discount' => 0,
                'hire_purchase_margin' => 0,
                'hire_additional_cost' => 0,
                'available_for_cash_purchase' => 1,
                'discount_for_cash_purchase' => 0,
                'cash_purchase_margin' => 0,
                'cash_purchase_additional_cost' => 0,
                'road_fund_licence' => '290',
                'dealership_id' => 1,
                'brochure' => '-',
                'status' => "-",
                'cached_cap_archive_info' => "-",
                'image_url' => "-",
            ]
        );
    }
}
