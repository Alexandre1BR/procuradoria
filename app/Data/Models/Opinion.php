<?php

namespace App\Data\Models;

use App\Data\Models\OpinionScope as OpinionScopeModel;
use App\Data\Models\OpinionType as OpinionTypeModel;
use App\Data\Models\User as UserModel;
use App\Data\Presenters\OpinionPresenter;

class Opinion extends BaseModel
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'opinions';

    protected $with = ['opinionScope', 'attorney', 'opinionType'];

    /**
     * @var array
     */
    protected $fillable = [
        'opinion_scope_id',
        'attorney_id',
        'opinion_type_id',
        'suit_number',
        'suit_sheet',
        'identifier',
        'date',
        'party',
        'abstract',
        'opinion',
        'file_pdf',
        'file_doc',
        'created_by',
        'updated_by',
    ];

    protected $presenters = ['formatted_date', 'pdf_file_name', 'doc_file_name'];

    public function opinionScope()
    {
        return $this->belongsTo(OpinionScopeModel::class);
    }

    public function attorney()
    {
        return $this->belongsTo(UserModel::class);
    }

    public function opinionType()
    {
        return $this->belongsTo(OpinionTypeModel::class);
    }

    public function getPresenterClass()
    {
        return OpinionPresenter::class;
    }
}
