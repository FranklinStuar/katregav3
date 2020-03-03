<?php

use Illuminate\Database\Seeder;

class MarksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1;$i<=20;$i++){
            $cod = $i > 9?$i : '0'.$i;
            \DB::table('marks')->insert([
                'name' => 'mark '.$i,
                'company_id' => 1,
            ]);
        }
    }
}
