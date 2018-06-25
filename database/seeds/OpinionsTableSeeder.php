<?php
use App\Data\Models\Opinion as OpinionModel;
use App\Data\Models\ProcessoLei as ProcessoLeiModel;
use Illuminate\Database\Seeder;

class OpinionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(OpinionModel::class, 50)->create();
        //        factory(ProcessoLeiModel::class, 300)->create();
    }
}
