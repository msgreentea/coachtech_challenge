<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $contact = Contact::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // $gender = ['1', '2'];

        return [
            'fullname' => $this->faker->lastName() . '　' . $this->faker->firstName(),
            'gender' => $this->faker->numberBetween(1, 2),
            // 'gender' => $this->faker->randomElement($gender),
            'email' => $this->faker->email,
            'postcode' => $this->faker->postcode,
            'address' => $this->faker->address,
            'building_name' => $this->faker->secondaryAddress,
            'opinion' => $this->faker->text,
        ];
    }
}
