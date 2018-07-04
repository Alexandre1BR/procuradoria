<?php

use App\Services\Routes;

Auth::routes();

//Route::get('/import', function () {
//    ini_set('max_execution_time', 300);
//    Artisan::call('procuradoria:import:processos', ['usersFile' => '/home/vagrant/code/alerj/procuradoria/u.xlsx', 'processesFile' => '/home/vagrant/code/alerj/procuradoria/procv2.xlsx']);
//});

require __DIR__.'/services/errors.php';

Route::group(
    ['middleware' => app(Routes::class)->makeAppRootRouteMiddlewares()],
    function () {
        require __DIR__.'/services/subsystem.php';

        Route::group(['middleware' => ['app.subsystem']], function () {
            require __DIR__.'/services/home.php';

            require __DIR__.'/services/users.php';

            require __DIR__.'/services/processos.php';

            require __DIR__.'/services/tribunais.php';

            require __DIR__.'/services/acoes.php';

            require __DIR__.'/services/andamentos.php';

            require __DIR__.'/services/andamentos.php';

            require __DIR__.'/services/prazos.php';

            require __DIR__.'/services/juizes.php';

            require __DIR__.'/services/agenda.php';

            require __DIR__.'/services/leis.php';

            require __DIR__.'/services/meios.php';

            require __DIR__.'/services/tags.php';

            require __DIR__.'/services/tipos_processos.php';

            require __DIR__.'/services/revisions.php';

            require __DIR__.'/services/opinions.php';
        });
    }
);
