<?php

namespace App\Exceptions;

use Exception;
<<<<<<< HEAD
use Symfony\Component\HttpKernel\Exception\HttpException;
=======
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
>>>>>>> 41aa23a07d02027e49ea70a65c2d9a47bbb0f18d
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that should not be reported.
     *
     * @var array
     */
    protected $dontReport = [
        HttpException::class,
<<<<<<< HEAD
=======
        ModelNotFoundException::class,
>>>>>>> 41aa23a07d02027e49ea70a65c2d9a47bbb0f18d
    ];

    /**
     * Report or log an exception.
     *
     * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
     *
     * @param  \Exception  $e
     * @return void
     */
    public function report(Exception $e)
    {
        return parent::report($e);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $e
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $e)
    {
<<<<<<< HEAD
//        return parent::render($request, $e);
        if ($e instanceof Tymon\JWTAuth\Exceptions\TokenExpiredException) {
            return response()->json(['token_expired'], $e->getStatusCode());
        } else if ($e instanceof Tymon\JWTAuth\Exceptions\TokenInvalidException) {
            return response()->json(['token_invalid'], $e->getStatusCode());
=======
        if ($e instanceof ModelNotFoundException) {
            $e = new NotFoundHttpException($e->getMessage(), $e);
>>>>>>> 41aa23a07d02027e49ea70a65c2d9a47bbb0f18d
        }

        return parent::render($request, $e);
    }
}
