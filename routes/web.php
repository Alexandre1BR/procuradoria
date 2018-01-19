<?php

Auth::routes();

$middlewares = array_merge(['auth'], [config('APP_AUTHORIZE', true) ? 'app.users' : null]);

Route::group(['middleware' => $middlewares], function() {
    require __DIR__.'/services/home.php';

    require __DIR__.'/services/processos.php';

    require __DIR__.'/services/tribunais.php';

    require __DIR__.'/services/acoes.php';

    require __DIR__.'/services/andamentos.php';

    require __DIR__.'/services/andamentos.php';

    require __DIR__.'/services/prazos.php';

    require __DIR__.'/services/juizes.php';
});
