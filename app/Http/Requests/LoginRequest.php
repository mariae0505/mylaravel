<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Factory as ValidationFactory;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'username' => 'required',
            'password' => 'required'
            
        ];
    }

    public function getCredentials(){
        // LoginRequest contiene la informacion de una solicitud
        $username = $this->get('username'); 
        //validar si es correo electronico
        if($this->isEmail($username)){
            //obtenemos credenciales
            return [
                'email' => $username,
                'password' => $this->get('password')
            ];
        }
        //solamente retornar username y password 
        return $this->only('username', 'password');


    }
    public function isEmail($value){
         
        //ValidationFactory es un contrato o interfaz que permite acceder modulo de validaciones laravel
        
        //Instanciamos basado en esa clase : 
        $factory = $this->container->make(ValidationFactory::class);

        //El metodo make recibe dos arreglos: el primero la asignación del valor que voy a validar
        // Lo siguiente son las reglas que voy a validar 
        //return $factory->make(['username'=> $value],['username'=> 'email'] )  Todo esto devuelve un objeto de tipo validator 
        //el objeto tiene un metodo que se llama fails() que se activa cuando falla. por eso lo negamos y activamos fail
        
        return  !$factory->make(['username'=> $value],['username'=> 'email'] )->fails();

    }
}
