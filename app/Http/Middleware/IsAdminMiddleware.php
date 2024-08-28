<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Role;

class IsAdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check user logged
        if(auth()->check()){ 
            // Get auth information if already login
            $user = auth()->user();

            // Find role information by foreign key or role in stable user name role_id
            $roleId = $user->role_id;
            $role = Role::find($roleId);

            if($role && $role->name != "Admin"){
                return response()->json(["message" => 'Unauthorize', 403]);
            }
            return $next($request);
        }

        return response()->json(["message" => 'Unauthorize', 403]);
       
    }
}
