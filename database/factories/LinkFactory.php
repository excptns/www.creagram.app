<?php

declare(strict_types=1);

namespace Database\Factories;


use App\Http\Resources\FolderResource;
use App\Http\Resources\MemberResource;
use App\Models\Link;
use App\Models\Member;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class LinkFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Link::class;

    /**
     * @return array
     */
    public function definition()
    {
        return [
            'link' => $this->faker->url,
            'follower_id' => Member::factory()
        ];
    }
}
