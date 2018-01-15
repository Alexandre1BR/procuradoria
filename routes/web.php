<?php

Auth::routes();

require __DIR__.'/services/home.php';

require __DIR__.'/services/processos.php';

require __DIR__.'/services/tribunais.php';

require __DIR__.'/services/acoes.php';

require __DIR__.'/services/andamentos.php';

require __DIR__.'/andamentos.php';

require __DIR__.'/prazos.php';
