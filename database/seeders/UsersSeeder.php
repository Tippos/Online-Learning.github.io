<?php

namespace Database\Seeders;

use App\Models\Users;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id'          => 1,
                'fullName'    => 'Nguyen Manh Tien',
                'birthday'    => 938672290,
                'email'       => 'nguyenmanhtien3091999@gmail.com',
                'phoneNumber' => '0989854739',
                'job'         => 'Student',
                'avatar'      => 'https://scontent.fhan2-2.fna.fbcdn.net/v/t1.0-9/120472565_849815579091961_8713095487069521055_o.jpg?_nc_cat=106&ccb=2&_nc_sid=09cbfe&_nc_ohc=n0w0OMHoRKkAX_EIhlg&_nc_ht=scontent.fhan2-2.fna&oh=34c2dafa38f10308315d926a3ba5d722&oe=601F9EE6',
                'facebook'    => 'https://www.facebook.com/tiencuns1/',
                'gender'      => GENDER_MALE,
                'country'     => 'Viet Nam',
                'role'        => ROLE_USER_ADMIN,
                'status'      => STATUS_USER_ACTIVE,
                'created_at'  => now(),
            ],
            [
                'id'          => 2,
                'fullName'    => 'Nguyen Van Tien',
                'birthday'    => 938672290,
                'email'       => 'nguyenmanhtien309@gmail.com',
                'phoneNumber' => '0989854738',
                'job'         => 'Student',
                'avatar'      => 'https://scontent.fhan2-2.fna.fbcdn.net/v/t1.0-9/120472565_849815579091961_8713095487069521055_o.jpg?_nc_cat=106&ccb=2&_nc_sid=09cbfe&_nc_ohc=n0w0OMHoRKkAX_EIhlg&_nc_ht=scontent.fhan2-2.fna&oh=34c2dafa38f10308315d926a3ba5d722&oe=601F9EE6',
                'facebook'    => 'https://www.facebook.com/tiencuns1/',
                'gender'      => GENDER_MALE,
                'country'     => 'Viet Nam',
                'role'        => ROLE_USER_ADMIN,
                'status'      => STATUS_USER_ACTIVE,
                'created_at'  => now(),
            ]

        ];
        Users::insert($data);
    }
}
