<?php

use Illuminate\Database\Seeder;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('companies')->insert([
            'name' => 'Katrega',
            'code' => 'katrega',
            'identification' => '0106410277001',
            'type_identification' => 'ruc',
            'access_sri' => true,
        ]);
        \DB::table('sris')->insert([
            'representant' => 'Franklin Peñafiel', 
            'company_id' => 1,
        ]);
        for($i=2;$i<21;$i++){
            $typeIdentification = rand(1,3);
            $sri = false;
            if($typeIdentification =! 3)
                $sri = rand(0,1);
            $identificaciones = ['ruc','rise','other'];
            \DB::table('companies')->insert([
                'name' => 'Empresa'.$i,
                'code' => \Str::random(13).$i,
                'identification' => '0'.$i,
                'type_identification' => ''.$identificaciones[$typeIdentification],
                'access_sri' => $sri,
            ]);
            if($sri){
                \DB::table('sris')->insert([
                    'representant' => 'Representante '.$i, 
                    'cod_local_bill' => rand(1,999).'', 
                    'cod_terminal_bill' => rand(1,999).'', 
                    'cod_currenct_bill' => rand(1,999).'', 
                    'amount_min_bill' => $identificaciones[$typeIdentification]=='1'?12:0, 
                    'amount_max_bill' =>  $identificaciones[$typeIdentification]=='1'?rand(420,60000):0,  
                    'company_id' => 1,
                ]);
            }
        }
    }
}
