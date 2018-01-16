<?php

Auth::routes();

Route::group(['middleware' => ['auth', 'app.users']], function () {
    require __DIR__.'/services/home.php';

    require __DIR__.'/services/processos.php';

    require __DIR__.'/services/tribunais.php';

    require __DIR__.'/services/acoes.php';

    require __DIR__.'/services/andamentos.php';

    require __DIR__.'/services/andamentos.php';

    require __DIR__.'/services/prazos.php';

    require __DIR__.'/services/juizes.php';
});
