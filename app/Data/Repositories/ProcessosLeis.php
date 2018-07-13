<?php
namespace App\Data\Repositories;

use App\Data\Models\ProcessoLei as ProcessoLeiModel;

class ProcessosLeis extends Base
{
    protected $model = ProcessoLeiModel::class;

    public function whereProcessoAndLeiCount($processo_id, $lei_id)
    {
        return ProcessoLeiModel
            ::where('processo_id', '=', $processo_id)
            ->where('lei_id', '=', $lei_id)
            ->count();
    }
}
