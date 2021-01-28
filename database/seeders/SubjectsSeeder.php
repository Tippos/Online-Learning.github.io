<?php

namespace Database\Seeders;

use App\Models\Subjects;
use Illuminate\Database\Seeder;

class SubjectsSeeder extends Seeder
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
                'name'        => 'Back End Class',
                'description' => 'Khoa hoc Back End Dev',
                'avatar'      => 'https://static.recruitery.co/uploads/images/80b78bf5071742dd8d230b80280737d6_20200615101535.png',
                'facebook'    => 'https://www.facebook.com/tiencuns1/',
                'status'      => STATUS_SUBJECT_ACTIVE,
                'userId'      => 1,
                'created_at'  => now(),
            ],
            [
                'id'          => 2,
                'name'        => 'Front End Class',
                'description' => 'Khoa hoc Front End Dev',
                'avatar'      => 'https://cdn.iconicjob.vn/prod/wp-content/uploads/2019/03/20101418/Front-end-la-gi-lap-trinh-vien-front-end-gioi-can-ky-nang-gi-1.jpg',
                'facebook'    => 'https://www.facebook.com/tiencuns1/',
                'status'      => STATUS_SUBJECT_ACTIVE,
                'userId'      => 2,
                'created_at'  => now(),
            ],
            [
                'id'          => 3,
                'name'        => 'Full Stack Class',
                'description' => 'Khoa hoc Full Stack  Dev',
                'avatar'      => 'https://connect.vn/wp-content/uploads/2019/12/front-end-back-end-l%C3%A0-g%C3%AC.png',
                'facebook'    => 'https://www.facebook.com/tiencuns1/',
                'status'      => STATUS_SUBJECT_ACTIVE,
                'userId'      => 1,
                'created_at'  => now(),
            ],
            [
                'id'          => 4,
                'name'        => 'React js',
                'description' => 'Khoa hoc React js ',
                'avatar'      => 'https://www.freecodecamp.org/news/content/images/2020/02/Ekran-Resmi-2019-11-18-18.08.13.png',
                'facebook'    => 'https://www.facebook.com/tiencuns1/',
                'status'      => STATUS_SUBJECT_ACTIVE,
                'userId'      => 1,
                'created_at'  => now(),
            ],
            [
                'id'          => 5,
                'name'        => 'Lap trinh IOS',
                'description' => 'lap trinh voi IOS',
                'avatar'      => 'https://ihuongdan.com/wp-content/uploads/2014/12/ios.jpg',
                'facebook'    => 'https://www.facebook.com/tiencuns1/',
                'status'      => STATUS_SUBJECT_ACTIVE,
                'userId'      => 2,
                'created_at'  => now(),
            ]

        ];
        Subjects::insert($data);
    }
}
