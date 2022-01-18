<?php

namespace Database\Seeders;

use App\Domains\Announcement\Models\Announcement;
use Illuminate\Database\Seeder;

/**
 * Class AnnouncementSeeder.
 */
class AnnouncementSeeder extends Seeder
{
    use DisableForeignKeys, TruncateTable;

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->disableForeignKeys();

        $this->truncate('announcements');

        if (app()->environment(['local', 'testing'])) {
            /*
            * Note: There is currently no UI for this feature. If you are going to build a UI, and if you are going to use a WYSIWYG editor for the message (because it supports HTML on the frontend) that you properly sanitize the input before it is stored in the database.
            */
            Announcement::create ([
                'area' => 'frontend',
                'type' => 'antasus',
                'message' => 'Development Version 1.10',
                'enabled' => true,
            ]);

        }

        $this->enableForeignKeys();
    }
}
