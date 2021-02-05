<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        //
    }
    /**
     * Report or log an exception.
     *
     * @param  \Exception  $exception
     * @return void
     */
   /* public function report(Exception $exception)
    {
        parent::report($exception);
    }
    */

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    /*public function render($request, Exception $exception)
    {
        return parent::render($request, $exception);
    }
    */
    /*
    protected function unauthenticated($request, AuthenticationException $exception)
    {
        if ($request->expectsJson()) {
            return response()->json(['message' => $exception->getMessage()], 401);
        }
        if ($request->is('management') || $request->is('admin/*')) {
            return redirect()->guest('/fresh/management/login');
        }
        if ($request->is('company') || $request->is('company/*')) {
            return redirect()->guest('/fresh/company/login');
        }
        if ($request->is('general') || $request->is('general/*')) {
            return redirect()->guest('/fresh/general/login');
        }
        return redirect()->guest($exception->redirectTo() ?? route('login'));
    }
*/
}
