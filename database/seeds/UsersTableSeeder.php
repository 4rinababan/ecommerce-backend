<?php

use Illuminate\Database\Seeder;
use App\Helpers\Enums\Role;
use App\Helpers\Enums\UserStatus;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'email_verified_at' => '2019-09-10 13:16:22',
                'password' => bcrypt('admin!23'),
                'remember_token' => NULL,
                'Role' => Role::ADMIN,
                'status' => UserStatus::ACTIVE,
                'created_at' => '2019-08-15 04:06:06',
                'updated_at' => '2019-08-15 04:06:06',
            ),
        ));
        
        
    }
}