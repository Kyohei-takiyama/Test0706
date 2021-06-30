<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => '田中　一郎',
            'mail' => 'test1@mail.com',
        ];
        DB::table('people_test')->insert($param);
        $param = [
            'name' => '田中　次郎',
            'mail' => 'test2@mail.com',
        ];
        DB::table('people_test')->insert($param);
        $param = [
            'name' => '田中　三郎',
            'mail' => 'test3@mail.com',
        ];
        DB::table('people_test')->insert($param);
    }
}
