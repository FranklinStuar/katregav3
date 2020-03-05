<?php

use Illuminate\Database\Seeder;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1;$i<=200;$i++){
            \DB::table('clients')->insert([
                'name' => 'Cliente '.$i,
                'identification' => '123456789'.$i,
                'address' => 'address '.$i,
                'phone' => '07456789'.$i,
                'movile' => '099456789'.$i,
                'email' => 'email'.$i.'@mail.com',
                'type_price' => rand(1,5),
                'discount' => rand(0,20),
                'email_marketing' => rand(0,1),
                'whatsapp_marketing' => rand(0,1),
                'deb' => rand(0,1000),
                'credit' => rand(0,10000),
                'active' => rand(0,1),
                'company_id' => 1,
                'type_client_id' => rand(1,20),
                'category_client_id' => rand(1,20),
                'zone_client_id' => rand(1,20),
            ]);
        }
    }
}
