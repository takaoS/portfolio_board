<?php

use Illuminate\Database\Seeder;

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
            'name' => 'Kazuto',
            'mail' => 'kazuto@gmail.com',
            'age' => 16,
        ];
        DB::table('people')->insert($param);

        $param = [
            'name' => 'Asuna',
            'mail' => 'asuna@gmail.com',
            'age' => 17,
        ];
        DB::table('people')->insert($param);

        $param = [
            'name' => 'Leafa',
            'mail' => 'leafa@gmail.com',
            'age' => 15,
        ];
        DB::table('people')->insert($param);

        $param = [
            'name' => 'Alice',
            'mail' => 'alice@gmail.com',
            'age' => 16,
        ];
        DB::table('people')->insert($param);

        $param = [
            'name' => 'Eugeo',
            'mail' => 'eugeo@gmail.com',
            'age' => 16,
        ];
        DB::table('people')->insert($param);
    }
}
