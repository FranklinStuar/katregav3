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
            'email' => 'franklin@mail.com',
            'password' => bcrypt('F')
        ]);
        for($i=2;$i<50;$i++){
            \DB::table('users')->insert([
                'name' => "User ".$i,
                'email' => "user".$i."@mail.com",
                'password' => bcrypt('U')
            ]);
        }
    }
}
