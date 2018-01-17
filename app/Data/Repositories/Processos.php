<?php

namespace App\Data\Repositories;

use App\Data\Models\Processo;
use Illuminate\Http\Request;

class Processos
{
    /**
     * @param Request $request
     *
     * @return void
     */
    public function createFromRequest(Request $request)
    {
        Processo::create($request->all());

        $request->session()->flash('status', 'Dado salvo com sucesso!');
    }

    public function searchFromRequest(Request $request)
    {
        $columns_text = [
                'numero_judicial',
                'numero_alerj',
                'vara', //'origem_complemento',
                'apensos_obs',
                'autor',
                'reu',
                'objeto',
                'merito',
                'liminar',
                'recurso',
                'tipo_meio',
        ];
        $columns_int = [
                'acao_id',
                'relator_id',
                'juiz_id',
                'procurador_id',
                'estagiario_id',
                'assessor_id',
        ];
        $columns_date = [
                'data_distribuicao',
        ];

        $query = Processo::select('*');

        $vPesquisa = $request->pesquisa;

        foreach ($columns_text as $column) {
            $query->orWhere($column, 'like', '%'.$vPesquisa.'%');
        }

        foreach ($columns_int as $column) {
            if (is_numeric($vPesquisa)) {
                $query->orWhere($column, '=', $vPesquisa);
            }
        }

        foreach ($columns_date as $column) {
            if (date_create_from_format('d/m/Y', $vPesquisa)) {
                $query->orWhere($column, '=', $vPesquisa);
            }
        }

        return $query->get();
    }
}
