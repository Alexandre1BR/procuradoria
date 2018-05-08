<?php

namespace App\Data\Repositories;

use App\Data\Models\Lei as LeiModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Leis extends Base
{
    /**
     * @var string
     */
    protected $model = LeiModel::class;

    /**
     * @param Request|null $request
     *
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function search(Request $request)
    {
        return $this->searchFromRequest($request->get('pesquisa'));
    }

    public function searchFromRequest($search = null, $query = null)
    {
        $search = is_null($search)
            ? collect()
            : collect(explode(' ', $search))->map(function ($item) {
                return strtolower($item);
            });

        $columns = collect([
            'numero_lei' => 'string',
            'autor'      => 'string',
            'assunto'    => 'string',
            'link'       => 'string',
            'artigo'     => 'string',
            'paragrafo'  => 'string',
            'inciso'     => 'string',
            'alinea'     => 'string',
            'item'       => 'string',
        ]);

        $query = $query ?: $this->makeLeiQuery();

        $search->each(function ($item) use ($columns, $query) {
            $columns->each(function ($type, $column) use ($query, $item) {
                if ($type === 'string') {
                    $query->orWhere(DB::raw("lower({$column})"), 'like', '%'.$item.'%');
                } else {
                    if ($this->isDate($item)) {
                        $query->orWhere($column, '=', $item);
                    }
                }
                $query->orWhereHas('nivelFederativo', function ($query) use ($item) {
                    $query->whereRaw("lower(nome) like '%{$item}%'");
                });

                $query->orWhereHas('tipoLei', function ($query) use ($item) {
                    $query->whereRaw("lower(nome) like '%{$item}%'");
                });
            });
        });

        return $this->makeResultForSelect($query->get());
    }

    public function makeLeiQuery()
    {
        return (new LeiModel())
            ->orderBy('updated_at', 'desc');
    }

    public function allOrdenado()
    {
        return (new LeiModel())
            ->orderBy('numero_lei')
            ->orderBy('artigo')
            ->orderBy('paragrafo')
            ->orderBy('inciso')
            ->orderBy('alinea')
            ->orderBy('item');
    }
}
