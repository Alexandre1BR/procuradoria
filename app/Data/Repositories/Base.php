<?php

namespace App\Data\Repositories;

use Illuminate\Http\Request;

abstract class Base
{
    /**
     * @var
     */
    protected $model;

    /**
     * @param Request $request
     *
     * @return mixed
     */
    public function createFromRequest($request)
    {
        if ($request instanceof Request) {
            $request = $request->all();
        }

        $id = isset($request['id']) ? $request['id'] : null;

        $model = is_null($id)
            ? new $this->model()
            : $this->model::withoutGlobalScopes()->find($id);

        $model->fill($request);

        $model->save();

        $this->saveTags($request, $model);

        return $model;
    }

    /**
     * @param $data
     *
     * @return mixed
     */
    public function create($data)
    {
        $model = is_null(($id = isset($data['id']) ? $data['id'] : null))
            ? new $this->model()
            : $this->model::find($id);

        $model->fill($data);

        $model->save();

        $model->saveTags(collect($data), $model);

        return $model;
    }

    /**
     * @param $column
     * @param $value
     *
     * @return mixed
     */
    public function findByColumn($column, $value)
    {
        return $this->model::where($column, $value)->first();
    }

    /**
     * @param array $search
     * @param array $attributes
     *
     * @return mixed
     */
    public function firstOrCreate(array $search, array $attributes = [])
    {
        return $this->model::firstOrCreate($search, $attributes);
    }

    /**
     * @param $abreviacao
     *
     * @return mixed
     */
    public function findByAbreviacao($abreviacao)
    {
        return $this->model::where('abreviacao', $abreviacao)->first();
    }

    /**
     * @param $user_id
     *
     * @return mixed
     */
    public function findById($user_id)
    {
        return $this->model::where('id', $user_id)->first();
    }

    public function maxId()
    {
        return $this->model::max('id');
    }

    /**
     * @param $attribute
     * @param $sign
     * @param $value
     *
     * @return mixed
     */
    public function whereNull($attribute)
    {
        return $this->model::whereNull($attribute);
    }

    /**
     * @return mixed
     */
    public function new()
    {
        return new $this->model();
    }

    /**
     * @return mixed
     */
    public function all()
    {
        return $this->makeResultForSelect($this->model::all());
    }

    public function allOrderBy($field)
    {
        return $this->model::orderBy($field)->get();
    }

    /**
     * @param $string
     *
     * @return mixed
     */
    public function cleanString($string)
    {
        return str_replace(["\n"], [''], $string);
    }

    /**
     * @param Request $request
     * @param $model
     */
    protected function saveTags($request, $model)
    {
        if (isset($request['tags'])) {
            $model->syncTags($request['tags']);
        }
    }

    /**
     * @param $result
     * @param string $label
     * @param string $value
     *
     * @return mixed
     */
    protected function makeResultForSelect(
        $result,
        $label = 'nome',
        $value = 'id'
    ) {
        return $result->map(function ($row) use ($value, $label) {
            $row['text'] = empty($row->text) ? $row[$label] : $row->text;

            $row['value'] = $row[$value];

            return $row;
        });
    }

    /**
     * @param $item
     *
     * @return string|void
     */
    protected function toDate($item)
    {
        try {
            $item = Carbon::createFromFormat('d/m/Y', $item)->format('Y-m-d');
        } catch (\Exception $exception) {
            return;
        }

        return $item;
    }

    public function toArrayWithColumnKey($elements, $columnName)
    {
        $returnArray = [];

        foreach ($elements as $element) {
            $returnArray[$element->$columnName] = $element;
        }

        return $returnArray;
    }

    /**
     * @param Request $request
     *
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function search(Request $request)
    {
        return $this->searchFromRequest($request->get('pesquisa'));
    }
}
