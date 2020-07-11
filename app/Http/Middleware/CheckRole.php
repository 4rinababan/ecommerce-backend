<?php
namespace App\Http\Middleware;

use Closure;
use App\Helpers\Enums\Role;

class CheckRole
{
	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next, $role) {
		if($request->user()->isGuest) {
			return $request->redirect('/login');
		} else if($request->user()->role != Role::getValue($role)) {
			abort(401, "You are not authorized to do that!");
		}
		return $next($request);
	}
}
