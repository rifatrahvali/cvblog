<?php

use App\Http\Middleware\RoleCheck;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        // Burada middleware'i alias ile kayıt ediyoruz.
        // Böylece rotalarda 'rolecheck' olarak kullanabileceğiz.
        $middleware->alias([
            'rolecheck' => RoleCheck::class,
        ]);

        // İsterseniz global middleware olarak da ekleyebilirsiniz:
        // $middleware->append(RoleCheck::class); // Tüm isteklerde çalışır

        // Ya da belli bir middleware grubuna ekleyebilirsiniz:
        // $middleware->appendToGroup('web', [RoleCheck::class]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
