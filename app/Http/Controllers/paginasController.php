<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class paginasController extends Controller
{

    public function home()
    {
        //Nos llevara a la pagina de home
        return view("home");
    }

  
    public function quienesSomos()
    {
        //Nos llevara a la pagina Quienes Somos 
        return view("quienesSomos");
    }
    public function garaje()
    {
        //Nos llevara a la pagina Quienes Somos 
        return view("garaje");
    }
    public function frigorificas()
    {
        //Nos llevara a la pagina Quienes Somos 
        return view("frigorificas");
    }
    public function carga()
    {
        //Nos llevara a la pagina Quienes Somos 
        return view("carga");
    }
    public function pasajeros()
    {
        //Nos llevara a la pagina Quienes Somos 
        return view("pasajeros");
    }
   
}
