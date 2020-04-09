<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'Nazam',
            'email'=>'nazam90-be@mail.com',
            'password'=>Hash::make('nazam90-be@mail.com'),
            'role_id'=>1,
            'news'=>3,
            'sent'=>false
        ]);
    }
}
