<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bicicleta;

class BicicletaController extends Controller {

    public function index(){
        $bicicletas=Bicicleta::All();
        return view('bicicletas.listarBicicleta',compact('bicicletas'));
    
    }

    public function create(){
        return view('bicicletas.create');
    }

    public function store(Request $request){
   
        $bicicletas= new Bicicleta();
        $bicicletas->name=$request->nombre_bicicleta;
        $bicicletas->descripcion=$request->descripcion_bicicleta;
        $bicicletas->save();
        return redirect()->route('bicicletas.index');
   
    }

    public function destroy(Bicicleta $bicicleta)
    {
 
       $bicicleta->delete();
       return redirect()->route('bicicletas.index');
    }
    
    public function show($bicicleta)
    { 
        return view('bicicletas.show',compact('bicicleta'));
    }
}
