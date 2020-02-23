<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert([
            'name' => 'Franklin',
            'username' => 'franklin',
            'email' => 'franklin@mail.com',
            'password' => bcrypt('F')
        ]);
        for($i=0;$i<20;$i++){
            \DB::table('users')->insert([
                'name' => "Usuer ".($i+1),
                'username' => "user".($i+1),
                'email' => "user".($i+1)."@mail.com",
                'password' => bcrypt('U')
            ]);
        }
    }
}
