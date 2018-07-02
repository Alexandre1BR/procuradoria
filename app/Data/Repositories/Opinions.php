<?php

namespace App\Data\Repositories;

use App\Data\Models\Opinion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Opinions extends Base
{
    public function attributesShowing(): array
    {
        $array = [];

        $array[] = (object) [
            'name'       => 'identifier',
            'showName'   => 'Identificador',
            'columnSize' => '10%',
            'type'       => 'string',
        ];

        $array[] = (object) [
            'name'         => 'opinion_scope',
            'showName'     => 'Abrangência',
            'columnSize'   => '10%',
            'type'         => 'id',
            'relationName' => 'opinionScope',
            'foreignName'  => 'name',
        ];

        $array[] = (object) [
            'name'         => 'attorney',
            'showName'     => 'Procurador',
            'columnSize'   => '10%',
            'type'         => 'id',
            'relationName' => 'attorney',
            'foreignName'  => 'name',
        ];

        $array[] = (object) [
            'name'         => 'opinion_type',
            'showName'     => 'Tipo',
            'columnSize'   => '10%',
            'type'         => 'id',
            'relationName' => 'opinionType',
            'foreignName'  => 'name',
        ];

        $array[] = (object) [
            'name'       => 'formatted_date',
            'showName'   => 'Data',
            'columnSize' => '10%',
            'type'       => 'date',
        ];

        $array[] = (object) [
            'name'       => 'abstract',
            'showName'   => 'Ementa',
            'columnSize' => '50%',
            'type'       => 'string',
        ];

        return $array;
    }

    public function formAttributes(): array
    {
        $array = [];

        $array[] = (object) [
            'name'           => 'opinion_scope_id',
            'showName'       => 'Abrangência',
            'type'           => 'id',
            'modelName'      => 'opinionScope',
            'attributeArray' => 'opinionScopes',
            'relationName'   => 'opinionScope',
            'foreignName'    => 'name',
        ];
        $array[] = (object) [
            'name'           => 'attorney_id',
            'showName'       => 'Procurador',
            'type'           => 'id',
            'modelName'      => 'user',
            'attributeArray' => 'attorneys',
            'relationName'   => 'attorney',
            'foreignName'    => 'name',
        ];
        $array[] = (object) [
            'name'           => 'opinion_type_id',
            'showName'       => 'Tipo',
            'type'           => 'id',
            'modelName'      => 'opinionType',
            'attributeArray' => 'opinionTypes',
            'relationName'   => 'opinionType',
            'foreignName'    => 'name',
        ];
        $array[] = (object) [
            'name'     => 'suit_number',
            'showName' => 'Número do Processo',
            'type'     => 'string',
        ];
        $array[] = (object) [
            'name'     => 'suit_sheet',
            'showName' => 'Folha do Processo',
            'type'     => 'string',
        ];
        $array[] = (object) [
            'name'     => 'identifier',
            'showName' => 'Identificador',
            'type'     => 'string',
        ];
        $array[] = (object) [
            'name'     => 'date',
            'showName' => 'Data',
            'type'     => 'date',
        ];
        $array[] = (object) [
            'name'     => 'party',
            'showName' => 'Interessado',
            'type'     => 'string',
        ];
        $array[] = (object) [
            'name'     => 'abstract',
            'showName' => 'Ementa',
            'type'     => 'textarea',
        ];
        $array[] = (object) [
            'name'     => 'opinion',
            'showName' => 'Parecer',
            'type'     => 'textarea',
        ];

        $array[] = (object) [
            'name'     => 'pdf_file',
            'showName' => 'Arquivo .pdf',
            'type'     => 'file',
        ];

        $array[] = (object) [
            'name'     => 'doc_file',
            'showName' => 'Arquivo .doc',
            'type'     => 'file',
        ];

        $array[] = (object) [
            'name'      => 'pdf_file_name',
            'showName'  => 'PDF',
            'imageName' => 'pdf-icon',
            'type'      => 'linkImage',
        ];

        $array[] = (object) [
            'name'      => 'doc_file_name',
            'showName'  => 'DOC',
            'imageName' => 'doc-icon',
            'type'      => 'linkImage',
        ];

        return $array;
    }

    public $editAttribute = 'identifier';

    /**
     * @var string
     */
    protected $model = Opinion::class;

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

        $columns = collect(['identifier' => 'string']);

        $query = Opinion::query();

        $search->each(function ($item) use ($columns, $query) {
            $columns->each(function ($type, $column) use ($query, $item) {
                if ($type === 'string') {
                    $query->orWhere(
                        DB::raw("lower({$column})"),
                        'like',
                        '%'.$item.'%'
                    );
                } else {
                    if ($this->isDate($item)) {
                        $query->orWhere($column, '=', $item);
                    }
                }
            });
        });

        return $this->makeResultForSelect($query->orderBy('identifier')->get());
    }
}
