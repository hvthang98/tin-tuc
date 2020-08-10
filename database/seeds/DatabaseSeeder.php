<?php

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
        // $this->call(UserSeeder::class);
        $data = [
             [
                'username'=>'hoai@gmail.com',
                'password'=>bcrypt('123456'),
                'name'=>'hoainguyen',
                'gender'=>1,
                'birthday'=>'1998-6-23',
                'address'=>'Bình Định',
                'level'=>1,
            ],
            [
                'username'=>'thang@gmail.com',
                'password'=>bcrypt('123456'),
                'name'=>'thanghuynh',
                'gender'=>1,
                'birthday'=>'1998-5-11',
                'address'=>'Quãng Ngãi',
                'level'=>1,
            ],
            [
               'username'=>'duy123@gmail.com',
                'password'=>bcrypt('123456'),
                'name'=>'duy nguyễn',
                'gender'=>1,
                'birthday'=>'1998-7-21',
                'address'=>'Hà Nội ',
                'level'=>0 ,
            ]
        ];
        DB::table('users')->insert($data);
    }
}
