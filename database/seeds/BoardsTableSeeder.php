<?php

use Illuminate\Database\Seeder;

class BoardsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'person_id' => 1,
            'title' => 'Title1',
            'body' => 'body1, body1, body1',
        ];
        DB::table('boards')->insert($param);

        $param = [
            'person_id' => 2,
            'title' => 'Title2-1',
            'body' => 'body2-1, body2-1, body2-1',
        ];
        DB::table('boards')->insert($param);

        $param = [
            'person_id' => 2,
            'title' => 'Title2-2',
            'body' => 'body2-2, body2-2, body2-2, body2-2, body2-2, body2-2',
        ];
        DB::table('boards')->insert($param);

        $param = [
            'person_id' => 4,
            'title' => 'Title3',
            'body' => 'body3, body3, body3',
        ];
        DB::table('boards')->insert($param);

    }
}
