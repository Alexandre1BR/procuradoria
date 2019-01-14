<?php

namespace App\Data\Models;

class SearchTerm extends BaseModel
{
    protected $connection = 'tribunais';

    protected $fillable = ['court', 'text'];
}
