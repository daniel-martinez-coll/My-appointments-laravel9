<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Specialty;
use App\Http\Controllers\Controller;

class SpecialtyController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    private function performValidation(Request $request){
        $rules = [
            'name' => 'required|min:3',
            'description' => 'required|min:3'
        ];
        $messaje = [
            'name.required' => 'Debe ingresar el nombre',
            'name.min' => 'Debe ingresar como mínimo 3 valores en el Nombre',
            'description.required' => 'Debe ingresar la descripción',
            'description.min' => 'Debe ingresar como mínimo 3 valores en la descripción'
        ];
        $this->validate($request, $rules, $messaje);
    }

    public function index(){
        $specialties = Specialty::all();
        return view('specialties.index', compact('specialties'));
    }

    public function create(){
        return view('specialties.create');
    }

    public function store(Request $request){        
        $this->performValidation($request);
        //dd($request->all());
        $specialty = new Specialty();
        $specialty->name = $request->input('name');
        $specialty->description = $request->input('description');
        $specialty->save();
        return redirect('/specialties')->with('notification', 'La especialidad se ha cargado correctamente');
    }

    public function edit(Specialty $specialty){

        return view('specialties.edit', compact('specialty'));
    }

    public function update(Request $request, Specialty $specialty){
        $this->performValidation($request);
        //dd($request->all());
        $specialty->name = $request->input('name');
        $specialty->description = $request->input('description');
        $specialty->save();
        return redirect('/specialties')->with('notification', 'La especialidad se ha modificado correctamente');
    }

    public function destroy(Specialty $specialty){
        $deletedSpecialty = $specialty->name;
        $specialty->delete();        
        return redirect('/specialties')->with('notification','La especialidad '. $deletedSpecialty .' ha eliminado correctamente');
    }
}
