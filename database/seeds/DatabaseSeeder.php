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
        $this->call(ProcessosTableSeeder::class);
        $this->call(LeisTableSeeder::class);
        $this->call(OpinionsTableSeeder::class);
    }
}
