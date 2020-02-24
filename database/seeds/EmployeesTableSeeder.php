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
            'password' => bcrypt('F'), // contraseña interna para uso dentro de la empresa
            'charge' => 'CEO',
            'salary' => 1200,
            'user_id' => 1,
            'company_id' => 1,
        ]);
        for($i=2;$i<101;$i++){
            $company_id = rand(1,20);
            $email = ($company_id==1)?'katrega':'empresa'.$company_id;
            \DB::table('employees')->insert([
                'identification' => '0'.$i,
                'name' => 'Employee '.$i, // nombre del empleado
                'email' => 'employee'.$i.'@'.$email.'.com', // correo único que se brinda por parte de la empresa, el correo no es personal
                'password' => bcrypt('E'), // contraseña interna para uso dentro de la empresa
                'user_id' => $i,
                'company_id' => $company_id,
            ]);
        }
    }
}
