<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RecordAddForm extends FormRequest
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
            "name"=>"required",
            "phone"=>"required",
            "address"=>"required",
            "nrc"=>"required",
            "dob"=>"required",
            "carno"=>"required",
            "carsiprice"=>"required",
            "rollsiprice"=>"required",
            "wsprice"=>"required",
            "company"=>"required",
            "status"=>"required",
            "remark"=>"required",
            "expire_date"=>"required",
            "basicpremium"=>"required",
            "totalpremium"=>"required",
            "commision"=>"required"
            
        ];
    }
}
