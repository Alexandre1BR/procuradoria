<?php

use Illuminate\Database\Seeder;

class ProcessosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Data\Models\Processo::class, 50)->create();
    }
}
