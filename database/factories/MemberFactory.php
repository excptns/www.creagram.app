<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Http\Resources\FolderResource;
use App\Models\Member;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class MemberFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Member::class;

    /**
     * @return array
     */
    public function definition()
    {
       return [
           'photo' => '',
           'name' => $this->faker->name,
           'description' => $this->faker->text(100),
       ];
    }
}
