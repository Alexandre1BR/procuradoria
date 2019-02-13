<?php

namespace App\Data\Repositories;

use App\Data\Models\OpinionSubject as OpinionSubjectsModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OpinionSubjects extends Base
{
    public function attributesShowing()
    {
        $array = [];

        $array[] = (object) [
            'name' => 'full_name',
            'showName' => 'Nome do Assunto',
            'columnSize' => '100%',
            'type' => 'string',
        ];

        return $array;
    }

    public function formAttributes()
    {
        $array = [];

        $array[] = (object) [
            'name' => 'name',
            'showName' => 'Nome do Assunto',
            'type' => 'string',
        ];

        return $array;
    }

    public $editAttribute = 'full_name';

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

        $query = OpinionSubjectsModel::query()->whereNotNull('parent_id');

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
                                'lower(' .
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

        //        $sorted = $query->get()->sortByDesc(function ($product, $key) {
        //            return ($product['full_name']);
        //        });

        //        dd($query->get());
        $array = $query->get()->toArray();
        $array = array_sort($array, 'full_name', SORT_ASC);
        $objects = [];
        foreach ($array as $item) {
            $objects[] = (object) $item;
        }

        //        $sorted->sortByDesc('full_name');

        //        dd($sorted);

        //        return $this->makeResultForSelect($query->get());
        //        return $this->makeResultForSelect(collect($objects));
        return collect($objects);
    }

    public function orderedArray($subject, &$array)
    {
        if (!is_null($subject->parent_id)) {
            $array[] = $subject;
        }

        foreach (
            $subject
                ->children()
                ->orderBy('name')
                ->get()
            as $child
        ) {
            $this->orderedArray($child, $array);
        }
    }

    public function fullTreeArray()
    {
        $array = [];
        $this->orderedArray($this->whereNull('parent_id')->first(), $array);

        return $array;
    }

    public function fullTree()
    {
        return $this->nodeToTree($this->whereNull('parent_id')->first());
    }

    public function nodeToTree($subject)
    {
        $array = [];

        foreach ($subject->children()->get() as $child) {
            $array[] = $this->nodeToTree($child);
        }

        $ownArray = ['id' => $subject->id, 'text' => $subject->name];

        if (!empty($array)) {
            $array = array_sort($array, 'text', SORT_ASC);
            $array2 = [];
            foreach ($array as $key => $item) {
                $array2[] = $item;
            }

            $ownArray['inc'] = $array2;
        }

        return $ownArray;
    }
}
