<?php

namespace App\Http\Requests\admin\app;

use Illuminate\Foundation\Http\FormRequest;

class BranchRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        $rules = [
            'lat'=> 'nullable|numeric',
            'long'=> 'nullable|numeric',
            'phone'=> 'required',

        ];

        foreach(config('app.shop_lang') as $key=>$lang){
            $rules[$key.".title"] =   'required';
            $rules[$key.".address"] =   'required';

            $rules[$key.".work_hours"] =   'required';
        }

        return $rules;
    }
}
