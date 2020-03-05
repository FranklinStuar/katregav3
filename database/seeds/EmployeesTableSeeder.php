<?php

use Illuminate\Database\Seeder;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        \DB::table('employees')->insert([
            'identification' => '0106410277',
            'name' => 'Franklin Peñafiel', // nombre del empleado
            'email' => 'franklin@katrega.com', // correo único que se brinda por parte de la empresa, el correo no es personal
            'charge' => 'CEO',
            'salary' => 2500,
            'user_id' => 1,
            'company_id' => 1,
        ]);
        for($i=2;$i<11;$i++){
            \DB::table('employees')->insert([
                'identification' => '0'.$i,
                'name' => 'Employee '.$i, // nombre del empleado
                'email' => 'employee'.$i.'@mail.com', // correo único que se brinda por parte de la empresa, el correo no es personal
                'user_id' => $i,
                'company_id' => 1,
                'salary' => rand(400,10000),
                'active' => rand(0,1),
            ]);
        }
    }
}
