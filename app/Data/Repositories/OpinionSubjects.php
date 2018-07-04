<?php
namespace App\Data\Repositories;

use App\Data\Models\OpinionSubject as OpinionSubjectsModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OpinionSubjects extends Base
{
    public function attributesShowing(): array
    {
        $array = [];

        $array[] = (object) [
            'name' => 'name',
            'showName' => 'Nome do Assunto',
            'columnSize' => '100%',
            'type' => 'string'
        ];

        return $array;
    }

    public function formAttributes(): array
    {
        $array = [];

        $array[] = (object) [
            'name' => 'name',
            'showName' => 'Nome do Assunto',
            'type' => 'string'
        ];

        return $array;
    }

    public $editAttribute = 'name';

    /**
     * @var string
     */
    protected $model = OpinionSubjectsModel::class;

    /**
     * @param Request $request
     *
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function search(Request $request)
    {
        return $this->searchFromRequest($request->get('pesquisa'));
    }

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

        $columns = $this->formAttributes();

        $query = OpinionSubjectsModel::query();

        $search->each(function ($item) use ($columns, $query) {
            foreach ($columns as $column) {
                switch ($column->type) {
                    case 'string':
                        $query->orWhere(
                            DB::raw("lower({$column->name})"),
                            'like',
                            '%' . $item . '%'
                        );
                        break;
                    case 'textarea':
                        $query->orWhere(
                            DB::raw("lower({$column->name})"),
                            'like',
                            '%' . $item . '%'
                        );
                        break;
                    case 'id':
                        $query->orWhereHas($column->relationName, function (
                            $query
                        ) use ($item, $column) {
                            $query->whereRaw(
                                "lower(" .
                                    $column->foreignName .
                                    ") like '%{$item}%'"
                            );
                        });
                        break;
                    case 'date':
                        $ifdate = $this->toDate($item);
                        if ($ifdate != null) {
                            $query->orWhereDate($column->name, '=', $ifdate);
                        }
                        break;
                }
            }
        });

        return $this->makeResultForSelect(
            $query->orderBy('updated_at', 'desc')->get()
        );
    }
}
