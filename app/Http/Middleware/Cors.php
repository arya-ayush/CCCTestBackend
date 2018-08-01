<?php
/**
 * Created by PhpStorm.
 * User: ayush
 * Date: 1/8/18
 * Time: 2:04 PM
 */

namespace App\Http\Middleware;


use Closure;

class Cors
{
    public function handle($request, Closure $next)
    {
        header("Access-Control-Allow-Origin: *");
        header('Access-Control-Allow-Methods: GET, POST, DELETE, OPTIONS');
        header('Access-Control-Allow-Headers: Origin, Content-Type, Accept, Authorization, X-Request-With');
        header('Access-Control-Allow-Credentials: true');

        if (!$request->isMethod('options')) {
            return $next($request);
        }
    }
}