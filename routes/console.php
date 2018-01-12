<?php

use Illuminate\Foundation\Inspiring;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
 */

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->describe('Display an inspiring quote');

Artisan::command('hello:world', function () {
    echo 'Hello World' . PHP_EOL;
});

Artisan::command('kill:em:all', function () {
    $this->call('config:clear');
    $this->call('cache:clear');
    $this->call('route:clear');
});
