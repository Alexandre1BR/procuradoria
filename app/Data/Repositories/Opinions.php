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
            'name' => 'identifier',
            'showName' => 'Identificador',
            'columnSize' => '10%',
            'type' => 'string'
        ];

        $array[] = (object) [
            'name' => 'opinion_scope',
            'showName' => 'Abrangência',
            'columnSize' => '10%',
            'type' => 'id',
            'relationName' => 'opinionScope',
            'foreignName' => 'name'
        ];

        $array[] = (object) [
            'name' => 'attorney',
            'showName' => 'Procurador',
            'columnSize' => '10%',
            'type' => 'id',
            'relationName' => 'attorney',
            'foreignName' => 'name'
        ];

        $array[] = (object) [
            'name' => 'opinion_type',
            'showName' => 'Tipo',
            'columnSize' => '10%',
            'type' => 'id',
            'relationName' => 'opinionType',
            'foreignName' => 'name'
        ];

        $array[] = (object) [
            'name' => 'formatted_date',
            'showName' => 'Data',
            'columnSize' => '10%',
            'type' => 'date'
        ];

        $array[] = (object) [
            'name' => 'abstract',
            'showName' => 'Ementa',
            'columnSize' => '50%',
            'type' => 'string'
        ];

        return $array;
    }

    public function createFormAttributes(): array
    {
        $array = [];

        $array[] = (object) [
            'name' => 'opinion_scope_id',
            'showName' => 'Abrangência',
            'type' => 'id',
            'modelName' => 'opinionScope',
            'attributeArray' => 'opinionScopes',
            'relationName' => 'opinionScope',
            'foreignName' => 'name'
        ];
        $array[] = (object) [
            'name' => 'attorney_id',
            'showName' => 'Procurador',
            'type' => 'id',
            'modelName' => 'user',
            'attributeArray' => 'attorneys',
            'relationName' => 'attorney',
            'foreignName' => 'name'
        ];
        $array[] = (object) [
            'name' => 'opinion_type_id',
            'showName' => 'Tipo',
            'type' => 'id',
            'modelName' => 'opinionType',
            'attributeArray' => 'opinionTypes',
            'relationName' => 'opinionType',
            'foreignName' => 'name'
        ];
        $array[] = (object) [
            'name' => 'suit_number',
            'showName' => 'Número do Processo',
            'type' => 'string'
        ];
        $array[] = (object) [
            'name' => 'suit_sheet',
            'showName' => 'Folha do Processo',
            'type' => 'string'
        ];
        $array[] = (object) [
            'name' => 'identifier',
            'showName' => 'Identificador',
            'type' => 'string'
        ];
        $array[] = (object) [
            'name' => 'date',
            'showName' => 'Data',
            'type' => 'date'
        ];
        $array[] = (object) [
            'name' => 'party',
            'showName' => 'Interessado',
            'type' => 'string'
        ];
        $array[] = (object) [
            'name' => 'abstract',
            'showName' => 'Ementa',
            'type' => 'textarea'
        ];
        $array[] = (object) [
            'name' => 'opinion',
            'showName' => 'Parecer',
            'type' => 'textarea'
        ];

        $array[] = (object) [
            'name' => 'pdf_file',
            'showName' => 'Arquivo .pdf',
            'type' => 'file'
        ];

        $array[] = (object) [
            'name' => 'doc_file',
            'showName' => 'Arquivo .doc',
            'type' => 'file'
        ];

        return $array;
    }

    public function showFormAttributes($isProcurador): array
    {
        $array = [];

        $array[] = (object) [
            'name' => 'opinion_scope_id',
            'showName' => 'Abrangência',
            'type' => 'id',
            'modelName' => 'opinionScope',
            'attributeArray' => 'opinionScopes',
            'relationName' => 'opinionScope',
            'foreignName' => 'name',
            'visible' => true
        ];
        $array[] = (object) [
            'name' => 'attorney_id',
            'showName' => 'Procurador',
            'type' => 'id',
            'modelName' => 'user',
            'attributeArray' => 'attorneys',
            'relationName' => 'attorney',
            'foreignName' => 'name',
            'visible' => true
        ];
        $array[] = (object) [
            'name' => 'opinion_type_id',
            'showName' => 'Tipo',
            'type' => 'id',
            'modelName' => 'opinionType',
            'attributeArray' => 'opinionTypes',
            'relationName' => 'opinionType',
            'foreignName' => 'name',
            'visible' => true
        ];
        $array[] = (object) [
            'name' => 'suit_number',
            'showName' => 'Número do Processo',
            'type' => 'string',
            'visible' => true
        ];
        $array[] = (object) [
            'name' => 'suit_sheet',
            'showName' => 'Folha do Processo',
            'type' => 'string',
            'visible' => true
        ];
        $array[] = (object) [
            'name' => 'identifier',
            'showName' => 'Identificador',
            'type' => 'string',
            'visible' => true
        ];
        $array[] = (object) [
            'name' => 'date',
            'showName' => 'Data',
            'type' => 'date',
            'visible' => true
        ];
        $array[] = (object) [
            'name' => 'party',
            'showName' => 'Interessado',
            'type' => 'string',
            'visible' => true
        ];
        $array[] = (object) [
            'name' => 'abstract',
            'showName' => 'Ementa',
            'type' => 'textarea',
            'visible' => true
        ];
        $array[] = (object) [
            'name' => 'opinion',
            'showName' => 'Parecer',
            'type' => 'textarea',
            'visible' => $isProcurador
        ];
        $array[] = (object) [
            'name' => 'pdf_file_name',
            'showName' => 'PDF',
            'linkName' => 'Visualizar',
            'type' => 'link',
            'visible' => $isProcurador
        ];
        $array[] = (object) [
            'name' => 'doc_file_name',
            'showName' => 'DOC',
            'linkName' => 'Visualizar',
            'type' => 'link',
            'visible' => $isProcurador
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

        $columns = $this->createFormAttributes();

        $query = Opinion::query();

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

        return $this->makeResultForSelect(
            $query->orderBy('updated_at', 'desc')->get()
        );
    }
}
