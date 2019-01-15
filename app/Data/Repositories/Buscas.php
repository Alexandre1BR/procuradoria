<?php

namespace App\Data\Repositories;

use App\Data\Models\Busca;
use App\Data\Models\Processo;
use App\Data\Models\ReadingLog;
use Auth;
use DB;

class Buscas extends Base
{
    /**
     * @var string
     */
    protected $model = Busca::class;

    /**
     * @param null|string $search
     *
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function searchFromRequest($search = null)
    {
        $search = is_null($search)
            ? collect()
            : collect(explode(' ', $search))->map(function ($item) {
                return strtolower($item);
            });

        $columns = collect(['number' => 'string']);

        $query = Busca::query();

        $search->each(function ($item) use ($columns, $query) {
            $columns->each(function ($type, $column) use ($query, $item) {
                if ($type === 'string') {
                    $query->orWhere(
                        DB::raw("lower({$column})"),
                        'like',
                        '%'.$item.'%'
                    );
                }
            });
        });

        return $this->makeResultForSelect(
            $query
                ->orderBy('created_at', 'desc')
                ->orderBy('number', 'desc')
                ->get()
        );
    }

    public function ignoreProceeding($id)
    {
        if ($proceeding = Busca::find($id)) {
            $proceeding->ignored_at = now();

            $proceeding->ignored_by_id = Auth::user()->id;

            $proceeding->save();
        }
    }

    public function importProceeding($id)
    {
        if ($proceeding = Busca::find($id)) {
            Processo::create([
                'numero_judicial' => $proceeding->number,

                'tribunal_id' => app(Tribunais::class)->findByAbreviacao(
                    $proceeding->court
                )->id,

                'observacao' => implode("\n", $proceeding->scraped_lines),

                'tipo_meio_id' => app(Meios::class)->findByColumn(
                    'nome',
                    'Eletrônico'
                )->id,
            ]);

            $proceeding->imported_at = now();

            $proceeding->imported_by_id = Auth::user()->id;

            $proceeding->save();
        }
    }

    public function getLastLog()
    {
        return ReadingLog::orderBy('created_at', 'desc')->first();
    }
}
