<?php

use App\Services\Routes;

Auth::routes();

Route::group(['middleware' => app(Routes::class)->makeAppRootRouteMiddlewares()], function () {
    require __DIR__.'/services/home.php';

    require __DIR__.'/services/processos.php';

    require __DIR__.'/services/tribunais.php';

    require __DIR__.'/services/acoes.php';

    require __DIR__.'/services/andamentos.php';

    require __DIR__.'/services/andamentos.php';

    require __DIR__.'/services/prazos.php';

    require __DIR__.'/services/juizes.php';

    require __DIR__.'/services/agenda.php';

    require __DIR__.'/services/leis.php';

    require __DIR__.'/services/usuarios.php';

    require __DIR__.'/services/meios.php';

    require __DIR__.'/services/tags.php';

    require __DIR__.'/services/users.php';
});
