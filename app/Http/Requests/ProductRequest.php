<?php

namespace App\Http\Requests;

use http\Env\Request;
use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'brand_id'=>'required',
            'product'=>'required',
            'brand' =>'required',
            'price' =>'required',
            'product_code'=>'required',
            'manu_date'=>'required',
            'exp_date'=>'required'
        ];
    }
}
