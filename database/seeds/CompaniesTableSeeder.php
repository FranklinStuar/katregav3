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
            'representant' => 'Franklin Peñafiel',
            'type_identification' => 'ruc',
        ]);
        for($i=2;$i<21;$i++){
            \DB::table('companies')->insert([
                'name' => 'Empresa'.$i,
                'code' => \Str::random(13).$i,
                'identification' => '0'.$i,
                'representant' => 'Representante '.$i,
            ]);
        }
    }
}
