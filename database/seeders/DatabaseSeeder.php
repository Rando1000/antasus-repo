<?php

namespace Database\Seeders;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use TruncateTable;

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->truncateMultiple([
            'activity_log',
            'failed_jobs',
        ]);

        $this->call([AuthSeeder::class]);
        $this->call([CategoriesSeeder::class]);
        $this->call([AnnouncementSeeder::class]);
        Model::reguard();
        $this->call([ProductSeeder::class]);
        $this->call([AdreplySeeder::class]);
        $this->call([UserSeeder::class]);

        // $this->call([
        //     AuthSeeder::class,
        //     CategoriesSeeder::class,
        //     AnnouncementSeeder::class,
        //     Model::reguard(),
        //     ProductSeeder::class,
        //     AdreplySeeder::class,
        //     UserSeeder::class,
        // ]);

    }
}
