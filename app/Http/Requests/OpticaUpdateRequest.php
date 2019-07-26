<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OpticaUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;@
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            'nombreOptica'   => 'required' , 
             'razonSocial'    => 'required',
            // 'nit'           => 'required|unique:opticas,nit,'.$this->optica,
             'direccion'     => 'required',
             'celular'       => 'required',
             'Telefono'      => 'required',
             'ciudad_id'     => 'required',
             'sucursal'      => 'required' ,
             'optPrincipal'  => 'required',
             'observacion'   => 'required',
             'status'        => 'required',
             'ingresoSede'   => 'required',
             'actSede'       => 'required',
             'resolucion'    => 'required',
             'estado'        => 'required',
        ];
    }
}
