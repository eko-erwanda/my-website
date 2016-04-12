<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PortofolioRequest extends Request
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
            'label' => 'required',
            'caption' => 'required',
            'title' => 'required',
            'client' => 'required',
            'date' => 'date|required',
            'skills' => 'required',
            'link' => 'required',
            'category' => 'required',
            'description' => 'required',
            'pic' => 'mimes:jpeg,jpg,png',
        ];
    }
}
