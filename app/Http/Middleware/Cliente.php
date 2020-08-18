<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Session;
use DB;
use Closure;


class Cliente
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$rol)
    {
        $correo=Session::get('correo');
        if($correo==null)
        {
            return redirect('/');     
        }
        else{
            $query = "select * from usuario where usuario.correo='$correo' ";
            $data=DB::select($query);
            if($data[0]->id_rol==2)
            {
                header('Last-Modified:' . gmdate('D, d M Y H:i:s') . 'GMT'); 
                header('Cache-Control: no-store, no-cache, must-revalidate');
                header('Cache-Control: post-check=0, pre-check=0', false);
                header('Pragma: no-cache');
                return $next($request);
            }
            else{
                return redirect('/Admin_restaurante');     
            } 
        }
    }
}