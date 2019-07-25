<?php

use \App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ApplesTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('apples')->insert([
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('apples')->insert([
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('apples')->insert([
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('apples')->insert([
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);


        DB::table('apples')->insert([
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
