<?php

namespace App\Http\Middleware;

use App\Helper\JWTToken;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TokenVarificationMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $token = $request->header('token');
        $result = JWTToken::VerifyToken($token);
        if ($result == "unauthorised") {
            return response()->json([
                'status' => 'failed',
                'message' => 'unauthorised',
            ], 401);

        } else {
            $request->headers->set('email', $result);

            return $next($request);
        }

    }
}
