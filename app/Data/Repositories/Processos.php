<?php

namespace App\Data\Repositories;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Data\Models\Processo;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\Processo as ProcessoRequest;

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

    private function isDate($item)
    {
        try {
            Carbon::createFromFormat('d/m/Y', $item);
        } catch (\Exception $exception) {
            return false;
        }

        return true;
    }

    public function search(ProcessoRequest $request)
    {
        return $this->searchFromRequest($request->get('pesquisa'));
    }

    /**
     * @param null|string $search
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function searchFromRequest($search = null)
    {
        $search = is_null($search)
            ? collect()
            : collect(explode(' ', $search))->map(function($item) {
                return strtolower($item);
            });

        $columns = collect([
            'numero_judicial' => 'string',
            'numero_alerj' => 'string',
            'vara' => 'string',
            //'origem_complemento' => 'string,
            'apensos_obs' => 'string',
            'autor' => 'string',
            'reu' => 'string',
            'objeto' => 'string',
            'merito' => 'string',
            'liminar' => 'string',
            'recurso' => 'string',
            'tipo_meio' => 'string',
            'data_distribuicao' => 'date',
        ]);

        $query = Processo::query();

        $search->each(function($item) use ($columns, $query) {
            $columns->each(function($type, $column) use ($query, $item) {
                if ($type === 'string') {
                    $query->orWhere(DB::raw("lower({$column})"), 'like', '%'.$item.'%');
                } else {
                    if ($this->isDate($item)) {
                        $query->orWhere($column, '=', $item);
                    }
                }
            });
        });

//        \DB::listen(function($query) { dump($query->sql); dump($query->bindings); });

        return $query->get();
    }
}
