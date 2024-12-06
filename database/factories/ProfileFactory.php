<?php

namespace Database\Factories;

use App\Models\Profile;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProfileFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Profile::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'user_id' => $this->faker->numberBetween(1, 100), // Assuming a range of user IDs
            'website_url' => $this->faker->url(),
            'website' => $this->faker->domainName(),
            'github_url' => 'https://github.com/' . $this->faker->userName(),
            'twitter_url' => 'https://twitter.com/' . $this->faker->userName(),
        ];
    }
}
