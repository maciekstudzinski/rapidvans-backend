<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class VansPickupsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'vehicle_cap_id' => $this->faker->randomNumber(5, false),
            'vehicle_name' => $this->faker->randomElement(['Ford Transit', 'Renault Master', 'Fiat Ducato']),
            'subtotal' => $this->faker->randomFloat(2, 100, 300),
            'custom_model' => "None",
            'vehicle_model' => $this->faker->randomElement(['Ford Transit 2.0 ecoboost', 'Renault Master 2.0 BFG', 'Fiat Ducato 3.0 Power']),
            'vehicle_variant' => $this->faker->randomElement(['2.0 ecovan', '3.0 non-eco van', 'Lux-van']),
            'van_type' => $this->faker->randomElement(['Panel Van', 'Box Van']),
            'core_stock' => $this->faker->numberBetween(1, 100),
            'top_vehicle' => $this->faker->numberBetween(0, 1),
            'predator' => $this->faker->numberBetween(0, 1),
            'trust_ford' => $this->faker->numberBetween(0, 1),
            'display_in_home' => $this->faker->numberBetween(0, 1),
            'mark_as_popular' => $this->faker->numberBetween(0, 1),
            'new_model' => $this->faker->numberBetween(0, 1),
            'delivery_time' => $this->faker->randomElement(['Do not display', 'Display']),
            'van_category' => $this->faker->randomElement(['2.0 ecovan', '3.0 non-eco van', 'Lux-van']),
            'tag_band' => $this->faker->randomElement(['Sample', 'The other option']),
            'delivery_fee' => $this->faker->randomFloat(2, 100, 300),
            'add_ons' => $this->faker->randomElement(['None', 'Some', 'Lots of']),
            'add_on_price' => $this->faker->randomFloat(2, 100, 300),
            'available_for_business_lease' => $this->faker->numberBetween(0, 1),
            'business_lease_discount' => $this->faker->randomFloat(2, 100, 300),
            'business_lease_margin' => $this->faker->randomFloat(2, 100, 300),
            'business_lease_additional_cost' => $this->faker->randomFloat(2, 100, 300),
            'available_for_hire_purchase' => $this->faker->numberBetween(0, 1),
            'hire_purchase_discount' => $this->faker->randomFloat(2, 100, 300),
            'hire_purchase_margin' => $this->faker->randomFloat(2, 100, 300),
            'hire_additional_cost' => $this->faker->randomFloat(2, 100, 300),
            'available_for_cash_purchase' => $this->faker->numberBetween(0, 1),
            'discount_for_cash_purchase' => $this->faker->randomFloat(2, 100, 300),
            'cash_purchase_margin' => $this->faker->randomFloat(2, 100, 300),
            'cash_purchase_additional_cost' => $this->faker->randomFloat(2, 100, 300),
            'road_fund_licence' => $this->faker->randomNumber(3, false),
            'dealership_id' => $this->faker->numberBetween(0, 10),
            'brochure' => '-',
            'status' => $this->faker->randomElement(['Available', 'Unavailable']),
            'cached_cap_archive_info' => "-",
            'image_url' => "https://picsum.photos/500/500",
        ];
    }
}
