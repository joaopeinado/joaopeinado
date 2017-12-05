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
        $this->call(RemetentesTableSeeder::class);
        $this->call(RecadosTableSeeder::class);
    }
}
