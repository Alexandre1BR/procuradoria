<?php
namespace App\Data\Models;

class Opinion extends BaseModel
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'opinions';

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
        'opinion'
    ];
}
