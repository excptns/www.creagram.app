<?php

namespace Database\Seeders;

use App\Models\Folder;
use App\Models\Link;
use App\Models\Member;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * Create user - user folders - folder members - member links
         */

        return User::factory()
            ->has(Folder::factory()->count(100)->has(Member::factory()->count(100)->has(Link::factory()->count(10), 'links'),
                'members'),
                'folders')
            ->count(100)
            ->create();
    }
}
