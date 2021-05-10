<?php

declare(strict_types=1);

namespace Database\Factories;


use App\Models\Folder;
use App\Models\Member;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class FolderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Folder::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'status' => 'public',
            'user_id' => User::factory()
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }

    public function members()
    {
        return $this
            ->afterCreating(function (User $user) {
                MemberFactory::new()->subscribed()->create([
                    'billable_id' => $user->id,
                ]);
            });
    }
}
