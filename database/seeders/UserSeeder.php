<?php

namespace Database\Seeders;

use App\Domains\Auth\Models\User;
use Illuminate\Database\Seeder;

/**
 * Class UserTableSeeder.
 */
class UserSeeder extends Seeder
{
    use DisableForeignKeys;

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        

        $this->disableForeignKeys();

        // Add the master administrator, user id of 1

        User::create([
            'type' => User::TYPE_ADMIN,
            'team' => 'yes',
            'display_role' => 'Lead-Developer',
            'name' => 'Radhouan Jouini',
            'age' => '42',
            'email' => 'rajou@web.de',
            'password' => 'Suzuki1000',
            'timezone' => 'Europe/Berlin',
            'email_verified_at' => now(),
            'active' => true,
            'avatar' => 'https://s12.directupload.net/images/200719/oedcqpcc.png',
        ]);

        User::create([
            'type' => User::TYPE_ADMIN,
            'team' => 'yes',
            'display_role' => 'Lead-Developer',
            'name' => 'Andreas Daufenbach',
            'age' => '21',
            'email' => 'ricbo@weby.de',
            'password' => 'Suzuki1000',
            'timezone' => 'Europe/Berlin',
            'email_verified_at' => now(),
            'active' => true,
            'avatar' => 'https://s12.directupload.net/images/2007188/9xm7gs3x.png',
        ]);

        User::create([
            'type' => User::TYPE_USER,
            'team' => 'yes',
            'display_role' => 'iOS-Developer',
            'name' => 'Thanh Duc Tran',
            'age' => '27',
            'email' => 'ricbo2@web.de',
            'password' => 'Suzuki1000',
            'timezone' => 'Europe/Berlin',
            'email_verified_at' => now(),
            'active' => true,
            'avatar' => 'https://s12.directupload.net/images/2007187/mb26wzfb.png',
        ]);

        User::create([
            'type' => User::TYPE_USER,
            'team' => 'yes',
            'display_role' => 'Marketing Manager',
            'name' => 'Andre Kleinheider',
            'age' => '29',
            'email' => 'ricbo3@web.de',
            'password' => 'Suzuki1000',
            'timezone' => 'Europe/Berlin',
            'email_verified_at' => now(),
            'active' => true,
            'avatar' => 'https://s12.directupload.net/images/2007196/oedcqpcc.png',
        ]);

        User::create([
            'type' => User::TYPE_USER,
            'team' => 'no',
            'display_role' => 'Lead-Developer',
            'name' => 'Ricardo Bouncer',
            'age' => '24',
            'email' => 'ricbo4@web.de',
            'password' => 'Suzuki1000',
            'timezone' => 'Europe/Berlin',
            'email_verified_at' => now(),
            'active' => true,
            'avatar' => 'https://s12.directupload.net/images/2007195/oedcqpcc.png',
        ]);

        User::create([
            'type' => User::TYPE_USER,
            'team' => 'no',
            'display_role' => 'Developer',
            'name' => 'Santo Domingo',
            'age' => '29',
            'email' => 'user1@user.com',
            'password' => 'Suzuki1000',
            'timezone' => 'Europe/Berlin',
            'email_verified_at' => now(),
            'active' => true,
            'avatar' => 'https://s12.directupload.net/images/2007194/oedcqpcc.png',
        ]);

        User::create([
            'type' => User::TYPE_USER,
            'team' => 'no',
            'display_role' => 'Ploper',
            'name' => 'Andrew Burnstein',
            'age' => '29',
            'email' => 'user2@user.com',
            'password' => 'Suzuki1000',
            'timezone' => 'Europe/Berlin',
            'email_verified_at' => now(),
            'active' => true,
            'avatar' => 'https://s12.directupload.net/images/2007193/oedcqpcc.png',
        ]);

        User::create([
            'type' => User::TYPE_USER,
            'team' => 'no',
            'display_role' => 'Member',
            'name' => 'Francesco de la Fonte',
            'age' => '39',
            'email' => 'user3@user.com',
            'password' => 'Suzuki1000',
            'timezone' => 'Europe/Berlin',
            'email_verified_at' => now(),
            'active' => true,
            'avatar' => 'https://s12.directupload.net/images/2007192/oedcqpcc.png',
        ]);

        User::create([
            'type' => User::TYPE_USER,
            'team' => 'no',
            'display_role' => 'Member',
            'name' => 'Jhonny Mc Quire',
            'age' => '51',
            'email' => 'user4@user.com',
            'password' => 'Suzuki1000',
            'timezone' => 'Europe/Berlin',
            'email_verified_at' => now(),
            'active' => true,
            'avatar' => 'https://s12.directupload.net/images/2007191/oedcqpcc.png',
        ]);

        if (app()->environment(['local', 'testing'])) {
            User::create([
                'type' => User::TYPE_USER,
                'team' => 'no',
                'name' => 'Test User',
                'email' => 'user@user.com',
                'password' => 'secret',
                'email_verified_at' => now(),
                'active' => true,
                'avatar' => 'https://s12.directupload.net/images/2007190/oedcqpcc.png',
            ]);
        }

        
    }
}
