<?php

Route::get('/admin/{demopage?}', 'DemoController@demo')->name('demo');