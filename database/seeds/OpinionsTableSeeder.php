<?php
use App\Data\Models\Opinion as OpinionModel;
use App\Data\Models\OpinionsSubject as OpinionsSubjectModel;
use App\Data\Models\OpinionSubject as OpinionSubjectModel;
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
        factory(OpinionSubjectModel::class, 50)->create();
        factory(OpinionsSubjectModel::class, 300)->create();
    }
}
