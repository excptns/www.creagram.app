<?php

namespace Database\Seeders;

use App\Models\Folder;
use App\Models\Link;
use App\Models\Member;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        return User::factory()
            ->hasFolders(3, function (array $attributes, User $user) {
                return ['user_type' => $user->type];
            })
            ->count(100)
            ->create();
    }
}
