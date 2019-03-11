<?php

namespace App\Data\Repositories;

use App\Data\Models\TipoProcesso;

class ArmazenadosEm extends Base
{
    public function all()
    {
        return '[{"id":"Não Armazenado","value":"Não Armazenado","text":"Não Armazenado"},{"id":"One Drive","value":"One Drive","text":"One Drive"}]';
    }
}
