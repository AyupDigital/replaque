<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'John Doe',
                'api_token' => '145e9498-d699-4834-8e04-59db748c3c87',
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ],
            [
                'name' => 'Foo Bar',
                'api_token' => '1fbf8e3c-de00-4ff5-a376-a73b666b9128',
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ],
        ]);
    }
}
