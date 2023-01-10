<?php

namespace Database\Factories;

use App\Models\Orders;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrdersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'customer_name' => $this->faker->name(),
            'customer_email' => $this->faker->unique()->safeEmail(),
            'customer_dob' => $this->faker->dateTimeBetween('1940-01-01', '2022-01-01')
                ->format('d/m/Y'),
            'customer_phone' => $this->faker->numerify('##########'),
            'customer_address' => $this->faker->address(),
            'time_at_current_address' => $this->faker->date(),
            'residential_status' => 'resident',
            'postcode' => $this->faker->postcode(),
            'business_name' => $this->faker->word(),
            'business_type' => 'Serious business',
            'business_telephone' => $this->faker->numerify('##########'),
            'business_address' => $this->faker->address(),
            'business_postcode' => $this->faker->postcode(),
            'business_date_established' => $this->faker->date(),
            'business_activity' => $this->faker->randomElement(['much', 'not much', 'public services']),
            'business_reg_no' => $this->faker->numerify('##########'),
            'vehicle_pickup_id' => $this->faker->numerify('########'),
            'initial_rental_price' => $this->faker->randomFloat(2),
            'price_per_month' => $this->faker->randomFloat(2, 200, 400),
            'initial_rental_price' => $this->faker->randomFloat(2),
            'contract_length' => $this->faker->numberBetween(24, 48),
            'order_email' => $this->faker->unique()->safeEmail(),
            'status' => $this->faker->randomElement(['active', 'completed', 'on hold']),
            'customer_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}
