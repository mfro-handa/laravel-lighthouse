<?php

namespace Database\Seeders;

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
        collect([
            '一郎',
            '二郎',
            '三郎',
            '四郎',
            '五郎',
            '六郎',
            '七郎',
            '八郎',
            '九郎',
            '十郎',
        ])->each(fn($name) => User::factory()->create(['name' => $name]));
    }
}
