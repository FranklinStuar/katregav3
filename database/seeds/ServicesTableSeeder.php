<?php

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1;$i<=200;$i++){
            $cod = $i > 9?$i : '0'.$i;
            
            $descEsp = rand(0,1);
            $dateDEsp = \Carbon\Carbon::create(2020, rand(4,12), rand(1,30), 0);
            $dateHEsp = $dateDEsp->addDay();

            $stock = \DB::table('stocks')->insert([
                'code'=> 'srv-'.$i,
                'name'=>'Service '.$i,
                'alternative_name'=>'Service alt '.$i,
                'disscount_fix'=>rand(0,100),
                'tax'=>rand(0,1),
                'seller'=>rand(0,1),
                'purchase'=>rand(0,1),
                'price_1'=>rand(0,2000),
                'price_2'=>rand(0,2000),
                'price_3'=>rand(0,2000),
                'price_4'=>rand(0,2000),
                'price_5'=>rand(0,2000),
                'active'=>rand(0,1),

                'disscount_special'=>($descEsp)?rand(0, 30):0,
                'init_special'=>($descEsp)?$dateDEsp:null,
                'finish_special'=>($descEsp)?$dateHEsp:null,
                'measurement_id'=>rand(1,20),
                'product_group_id'=>rand(1,20),
                'company_id' => 1,
            ]);
            \DB::table('services')->insert([
                'stock_id' => $i,
            ]);
        }
    }
}
