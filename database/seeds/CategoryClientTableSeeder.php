<?php

use Illuminate\Database\Seeder;

class CategoryClientTableSeeder extends Seeder
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
            \DB::table('category_clients')->insert([
                'name' => 'category '.$i,
                'company_id' => 1,
            ]);
        }
    }
}
