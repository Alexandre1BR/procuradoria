<?php

use Illuminate\Database\Seeder;
use App\Data\Models\Lei as LeiModel;
use App\Data\Models\ProcessoLei as ProcessoLeiModel;


class LeisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(LeiModel::class, 50)->create();
        factory(ProcessoLeiModel::class, 300)->create();
    }
}
