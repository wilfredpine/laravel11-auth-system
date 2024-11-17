<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AddCspHeaders
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        // $csp = "default-src 'self'; script-src 'self' 'unsafe-inline' 'unsafe-eval'; style-src 'self' 'unsafe-inline'; img-src 'self' data:; font-src 'self';";

        // $csp = "
        //     default-src 'self';
        //     script-src 'self' 'unsafe-inline' https://cdnjs.cloudflare.com;
        //     style-src 'self' 'unsafe-inline' https://fonts.googleapis.com;
        //     img-src 'self' data:;
        //     font-src 'self' https://fonts.gstatic.com;
        //     connect-src 'self';
        // "; //allow the necessary resources

        $csp = "default-src * 'unsafe-inline' 'unsafe-eval';"; // for debugging

        // $csp = "
        //     default-src 'self';
        //     script-src 'self' 'unsafe-inline';
        //     style-src 'self' 'unsafe-inline';
        //     report-uri /csp-report-endpoint;
        // "; // browser reporting

        $response->headers->set('Content-Security-Policy', $csp);

        return $response;
    }
}
