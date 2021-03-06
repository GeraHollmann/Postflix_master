<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact_us;

class ContactoController extends Controller
{
  public function contacto(Request $req){

      $NosContacto = new Contact_us();

      $NosContacto->first_name = $req['first_name'];
      $NosContacto->last_name = $req['last_name'];
      $NosContacto->email = $req['email'];
      $NosContacto->comment = $req['comment'];


      $NosContacto->save();
      return redirect('/index');
  }

  public function reclamos(){
    $reclamo = Contact_us::all();
    $vac = compact('reclamo');
    return view('/vistaReclamos', $vac);
  }

  public function borrarReclamo(Request $req){
    $idReclamo = $req['id'];
    $reclamo = Contact_us::find($idReclamo);
    $reclamo->delete();
    return redirect('/vistaReclamos');
  }
}
