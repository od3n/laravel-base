<?php

class UsersTableSeeder extends Seeder
{

    public function run()
    {

        User::truncate();

        $datas = [
            [
                'first_name'            => 'System',
                'last_name'             => 'Administrator',
                'username'              => 'admin',
                'email'                 => 'admin@example.com',
                'password'              => 'admin',
                'password_confirmation' => 'admin',
                'organization_unit_id'  => 1,
                'confirmed'             => 1,
            ],
            [
                'first_name'            => 'System',
                'last_name'             => 'User',
                'username'              => 'user',
                'email'                 => 'user@example.com',
                'password'              => 'user',
                'password_confirmation' => 'user',
                'organization_unit_id'  => 1,
                'confirmed'             => 1,
            ]
        ];

        $roles = [
            1 => [1],
            2 => [6]
        ];

        foreach ($datas as $data) {
            $user = User::create($data);
            if(isset($roles[$user->id]))
                $user->roles()->sync($roles[$user->id]);
        }
    }

}
