<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;



class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next,$role): Response
    {
        
     if(!Auth::check()){
        return redirect()->route('login');
     }
     
     $authuserRole=Auth::user()->role;

     switch($role){
     
     case 'admin':
        if($authuserRole==0){
            return $next($request);
        }
       break;
       case 'vendor':
        if($authuserRole==1){
           return $next($request); 
        }
        break;
        case 'customer':
            if($authuserRole==2){
               return $next($request); 
            }
            break;
     }
     switch($authuserRole){
        case 0:
           return redirect()->route('admin.dashboard');
        case 1:
           return redirect()->route('vendor');  
        case 2: 
              return redirect()->route('customer.dashboard');
     }
     return redirect()->route('login');

    }
}
