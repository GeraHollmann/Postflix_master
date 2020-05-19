<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use Illuminate\Support\Facades\Auth;

class AmigosController extends Controller
{
  public function amigos(){
    if (Auth::guard()->check()) {
      $contactos = Contact::all();
      $vac = compact('contactos');
      return view('mis-contactos', $vac);
    }else{
      return redirect('login');
    }
  }
}
