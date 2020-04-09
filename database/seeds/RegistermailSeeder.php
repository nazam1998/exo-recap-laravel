<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegistermailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('registermails')->insert([
            'name'=>true,
            'email'=>true,
            'password'=>true,
            'contenu'=>'Hello world',
        ]);
    }
}
