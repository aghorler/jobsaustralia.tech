<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(EmployersTableSeeder::class);
        $this->call(JobsTableSeeder::class);
        $this->call(ApplicationsTableSeeder::class);
    }
}
