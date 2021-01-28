<?php

namespace Database\Factories;

use App\Models\Users;
use Illuminate\Database\Eloquent\Factories\Factory;

class UsersFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Users::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'fullName'    => $this->faker->name,
            'birthday'    => $this->faker->unixTime,
            'email'       => $this->faker->unique()->safeEmail,
            'phoneNumber' => $this->faker->unique()->phoneNumber,
            'job'         => $this->faker->jobTitle,
            'avatar'      => AVT_ARR[rand(0, 1)],
            'facebook'    => $this->faker->url,
            'gender'      => rand(GENDER_MALE, GENDER_FEMALE),
            'country'     => $this->faker->country,
            'role'        => ROLE_USER_COURSE,
            'status'      => STATUS_USER_PENDING,
            'created_at'  => now(),
        ];
    }
}
