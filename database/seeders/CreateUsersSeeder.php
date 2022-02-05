<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roleData = [
            [
                'name'=>'admin',
            ],
            [
                'name'=>'user',
            ],
        ];
        foreach ($roleData as $key => $val) {
            Role::create($val);
        }
        $userData = [
            [
            'name'=>'dummyAdmin',
            'email'=>'nvkhoa.ne@gmail.com',
            'role_id'=>1,
            'password'=> bcrypt('123123123'),
            ],
            [
            'name'=>'dummyUser',
            'email'=>'nguyenkhoa071220@gmail.com',
            'role_id'=>0,
            'password'=> bcrypt('123123123'),
            ],
        ];

        foreach ($userData as $key => $val) {
            User::create($val);
        }
    }
}
