<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestsProduct extends FormRequest
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
            'jdl_Pdk'=>'required',
            'hrg_awal'=>'required',
            'hrg_promo'=>'required',
            'kategori'=>'required',
            'sub_kategori'=>'required',
            'description'=>'required',
            'foto'=>'required'
        ];
    }
}
