<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Http\Controllers\Controller;

class PatientController extends Controller
{
    public function index(){
        $patients = User::patients()->Paginate(10);
        return view('patients.index',compact('patients'));
    }

    public function create(){
        return view('patients.create');
    }

    public function store(Request $request){
        $rules = [
            'name' => ' string | min:4 | max:255',
            'firstName' => ' nullable | string | min:4 | max:255',
            'lastName' => ' nullable | string | min:4 | max:255',
            'email' => ' string | email | max:255 | unique:users',
            'password' => ' string | min:5 | confirmed',
            'dni' => ' nullable | string | min:4 | max:255',
            'address' => 'nullable | string | min:4 | max:255',
            'phone' => ' nullable | string | min:4 | max:255', 
            'city' => ' nullable | string | min:4 | max:255',
            'country' => ' nullable | string | min:4 | max:255',
            'postalCode' => ' nullable | numeric '
        ];

        $messaje = [
            'name.min' => 'Debe ingresar como mínimo 4 valores en el Nombre',
            'firstName.min' => 'Debe ingresar como mínimo 4 valores en el Nombre',
            'lastName.min' => 'Debe ingresar como mínimo 4 valores en el Nombre',
            'email.unique' => 'El correo esta siendo usado.',
            'password.min' => 'Debe ingresar como mínimo 5 valores para la contraseña',
            'password.confirmed' => 'Las contraseñas no coinciden.',
            'dni.min' => 'Debe ingresar como mínimo 8 valores para la contraseña',
            'address.min' => 'Debe ingresar como mínimo 4 valores para la dirección',
            'phone.min' => 'Debe ingresar como mínimo 8 valores para el telefono', 
            'city.min' => 'Debe ingresar como mínimo 4 valores para la ciudad',
            'country.min' => 'Debe ingresar como mínimo 4 valores para el país',
            'postalCode.numeric' => 'Debe ingresar solo números para el codigo postal',
        ];

        $this->validate($request, $rules, $messaje);
   
         User::create([
            'name' => $request['name'],
            'firstName' => $request['firstName'],
            'lastName' => $request['lastName'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'dni' => $request['dni'],
            'address' => $request['address'],
            'phone' => $request['phone'],
            'city' => $request['city'],
            'country' => $request['country'],
            'postalCode' => $request['postalCode'],
            'role' => '3'
        ]);
        
        return redirect('/patients')->with('notification', 'El Paciente fue cargado correctamente');
    
    }

    public function show($id){
        //
    }

    public function edit($id){
        $patient =  User::patients()->findorFail($id);
        return view('patients.edit', compact('patient'));
    }

    public function update(Request $request, $id){
        $rules = [
            'name' => ' string | min:4 | max:255',
            'firstName' => ' nullable | string | min:4 | max:255',
            'lastName' => ' nullable | string | min:4 | max:255',
            'email' => ' string | email | max:255 ',
            'password' => ' nullable | string | min:5 | confirmed',        
            'dni' => ' nullable | string | min:4 | max:255',
            'address' => 'nullable | string | min:4 | max:255',
            'phone' => ' nullable | string | min:4 | max:255', 
            'city' => ' nullable | string | min:4 | max:255',
            'country' => ' nullable | string | min:4 | max:255',
            'postalCode' => ' nullable | numeric '
        ];

        $messaje = [
            'name.min' => 'Debe ingresar como mínimo 4 valores en el Nombre',
            'firstName.min' => 'Debe ingresar como mínimo 4 valores en el Nombre',
            'lastName.min' => 'Debe ingresar como mínimo 4 valores en el Nombre',
            'password.min' => 'Debe ingresar como mínimo 5 valores para la contraseña',
            'password.confirmed' => 'Las contraseñas no coinciden.',
            'dni.min' => 'Debe ingresar como mínimo 8 valores para la contraseña',
            'address.min' => 'Debe ingresar como mínimo 4 valores para la dirección',
            'phone.min' => 'Debe ingresar como mínimo 8 valores para el telefono', 
            'city.min' => 'Debe ingresar como mínimo 4 valores para la ciudad',
            'country.min' => 'Debe ingresar como mínimo 4 valores para el país',
            'postalCode.numeric' => 'Debe ingresar solo números para el codigo postal',
        ];

        $this->validate($request, $rules, $messaje);
        
        $user = User::patients()->findorFail($id);

        $data = $request->only('name','firstName' ,'lastName' ,'email','dni','address','phone','city','country','postalCode' );
        $password = $request['password'];     
		if ($password) {
            $data['password'] = Hash::make($password) ;
		}
        $user->fill($data);
        $user->save();
        return redirect('/patients')->with('notification', 'El Paciente fue modificado correctamente');
    }

    public function destroy(User $patient){
        $PatientsName = $patient->lastName.", ". $patient->firstName;
        $patient->delete();        
        return redirect('/patients')->with('notification','El paciente: '. $PatientsName .' ha eliminado correctamente');
    }
}
