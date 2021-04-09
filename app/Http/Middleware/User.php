<?php 

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Session;

/**
 * 
 */
class User
{
	
	public function handle($request, Closure $next) {

		if(session('std_id')) {
			return $next($request);
		}

		return redirect('/');
	}
}