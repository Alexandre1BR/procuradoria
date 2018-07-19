<?php
use Illuminate\Database\Migrations\Migration;

class TruncateTiposJuizesEMeios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        \App\Data\Models\Meio::truncate();
        \App\Data\Models\TipoJuiz::truncate();
    }
}
