<?php

Route::get('/assessores', 'Users@assessores')->name('usuarios.assessores');

Route::get('/estagiarios', 'Users@estagiarios')->name('usuarios.estagiarios');

Route::get('/procuradores', 'Users@procuradores')->name('usuarios.procuradores');
