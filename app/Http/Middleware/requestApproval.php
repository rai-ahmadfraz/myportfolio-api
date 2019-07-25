<?php

namespace App\Http\Middleware;

use Closure;

class requestApproval {

    public function handle($request, Closure $next) {

        logger("middleware");
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, PATCH, DELETE');
        header('Access-Control-Allow-Credentials: true');
        header('Access-Control-Allow-Headers: Content-Type,Accept, Access-Control-Allow-Headers, Authorization,Device-Type,Local-Lang-Code, X-Requested-With,cache-control');
        header('Access-Control-Expose-Headers: pm_version,Video-Source,Server-Lang-Code');

        return $next($request);
    }

}
