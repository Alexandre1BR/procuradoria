<?php

use Illuminate\Database\Seeder;
use App\Data\Models\Processo as ProcessoModel;

class ProcessosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(ProcessoModel::class, 50)->create();
    }
}
