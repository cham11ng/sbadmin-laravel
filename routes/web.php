<?php

Route::get('/', function () {
    return redirect('admin');
});

Route::get('/admin/{demopage?}', 'DemoController@demo')->name('demo');
