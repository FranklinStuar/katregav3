<?php

use Illuminate\Database\Seeder;

class ProvidersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $typeIdentification = ['ruc','rise','none'];
        for($i=1;$i<=200;$i++){
            \DB::table('providers')->insert([
                'name' => 'Proveedor '.$i,
                'identification' => '123456789'.$i,
                'address' => 'address '.$i,
                'phone' => '07456789'.$i,
                'movile' => '099456789'.$i,
                'email' => 'email'.$i.'@mail.com',
                'deb'  => rand(0,10000),
                'active' => rand(0,1),
                'type_identification' => $typeIdentification[rand(0,2)],
                'company_id' => 1,
            ]);
        }
    }
}
