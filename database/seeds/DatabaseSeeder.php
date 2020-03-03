<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(CompaniesTableSeeder::class);
        $this->call(EmployeesTableSeeder::class);
        $this->call(GroupsTableSeeder::class);
        $this->call(MarksTableSeeder::class);
        $this->call(LinesTableSeeder::class);
        $this->call(MeasurementsTableSeeder::class);
        $this->call(ServicesTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
    }
}
