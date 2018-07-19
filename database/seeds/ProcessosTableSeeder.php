<?php

use App\Data\Models\Processo as ProcessoModel;
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
        factory(ProcessoModel::class, 50)->create();
    }
}
