<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use Illuminate\Support\Facades\Auth;

class PerfilController extends Controller
{
  //no se si sirve , probando los middleware
  // public function __construct()
  // {
  //     $this->middleware('auth');
  //       return redirect('/perfil');
  // }

//   public function usuarios(){
//     if (Auth::guard()->check()){
//     // $personaLogueada = User::find(auth()->id());
//       /*$ColeccionDelUsuario = Post::where('users_id', "=", $idLog['id'])->get();
//       $vac = compact('personaLogueada');*/
//       return view('perfil', $vac);
//     }else{
//       return redirect('login');
//     }
// }


/*    public function pelis(){
      if (Auth::guard()->check()) {
          $idLog = User::find(auth()->id());
          $ColeccionDelUsuario = Post::where('users_id', "=", $idLog['id'])->get();
          $posteoDelUsuario = $ColeccionDelUsuario->toArray();
          if ($idLog['id'] == $posteoDelUsuario[0]['users_id']){
            $posteo = $posteoDelUsuario;
            $vac = compact('posteo');
             return view('perfil', $vac);
           }else{
             return 'No tienes Posteos!';
          }
      }else {
        return redirect('login');
      }
    }*/


}
